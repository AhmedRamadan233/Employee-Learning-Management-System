<?php

namespace App\Services\Dashboard\Courses;

use App\Http\Requests\Dashboard\Courses\CourseRequest;
use App\Repository\Interfaces\CourseRepositoryInterface;
use App\Repository\Interfaces\UserRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CourseService
{
    public function __construct(
        private CourseRepositoryInterface $repository,
        private UserRepositoryInterface $userRepository
    ) {}


    public function index()
    {
        $courses =  $this->repository->paginate();
        return view('dashboard.pages.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('dashboard.pages.courses.create');
    }

    public function store(CourseRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();

            $userData = [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ];

            $courseData = [
                'title' => $data['title'],
                'description' => $data['description'],
                'slug' => Str::slug($data['title']),
            ];
            $user = $this->userRepository->updateOrCreate(
                ['email' => $userData['email']],
                $userData
            );
            $courseData['user_id'] = $user->id;

            $this->repository->create($courseData);

            DB::commit();
            return redirect()->route('courses.index')->with('success', 'Course created successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }
}
