<?php
@extends('layouts.app')

@section('content')
    <h1>{{ isset($task) ? 'Edit Task' : 'Create Task' }}</h1>
    <form action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}" method="POST">
        @csrf
        @if(isset($task))
            @method('PUT')
        @endif
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $task->title ?? '') }}" required>
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ old('description', $task->description ?? '') }}</textarea>
        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="pending" {{ old('status', $task->status ?? '') == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="in_progress" {{ old('status', $task->status ?? '') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
            <option value="completed" {{ old('status', $task->status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
        </select>
        <label for="due_date">Due Date:</label>
        <input type="date" name="due_date" id="due_date" value="{{ old('due_date', $task->due_date ?? '') }}">
        <button type="submit">{{ isset($task) ? 'Update' : 'Create' }}</button>
    </form>
@endsection