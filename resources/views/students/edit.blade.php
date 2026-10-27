@extends('layouts.app')

@section('content')

<h2>Edit Student</h2>

<form action="{{ route('students.update', $student) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Student Number</label>
    <input type="text" name="student_number"
           value="{{ old('student_number', $student->student_number) }}"
           required>

    <label>First Name</label>
    <input type="text" name="first_name"
           value="{{ old('first_name', $student->first_name) }}"
           required>

    <label>Last Name</label>
    <input type="text" name="last_name"
           value="{{ old('last_name', $student->last_name) }}"
           required>

    <label>Email</label>
    <input type="email" name="email"
           value="{{ old('email', $student->email) }}"
           required>

    <label>Course</label>
    <input type="text" name="course"
           value="{{ old('course', $student->course) }}"
           required>

    <label>Year Level</label>
    <select name="year_level" required>
        @for($year = 1; $year <= 5; $year++)
            <option value="{{ $year }}"
                @selected(old('year_level', $student->year_level) == $year)>
                Year {{ $year }}
            </option>
        @endfor
    </select>

    <button type="submit">Update Student</button>

    <a href="{{ route('students.index') }}" class="btn">
        Cancel
    </a>
</form>

@endsection