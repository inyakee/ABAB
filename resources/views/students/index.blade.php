@extends('layouts.app')

@section('content')

<a href="{{ route('students.create') }}" class="btn">
    Add Student
</a>

<table>
    <thead>
        <tr>
            <th>Student Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Year</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse($students as $student)
            <tr>
                <td>{{ $student->student_number }}</td>
                <td>
                    {{ $student->first_name }}
                    {{ $student->last_name }}
                </td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->year_level }}</td>

                <td>
                    <div class="actions">
                        <a href="{{ route('students.edit', $student) }}"
                           class="btn">
                            Edit
                        </a>

                        <form
                            action="{{ route('students.destroy', $student) }}"
                            method="POST"
                            onsubmit="return confirm('Delete this student?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="danger">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No students found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

{{ $students->links() }}

@endsection