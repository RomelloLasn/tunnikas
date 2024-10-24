@extends('layouts.app')

@section('content')
    <h1>Task Status Distribution</h1>
    <select id="statusFilter" onchange="filterTasks()">
        <option value="all">All</option>
        <option value="pending">Pending</option>
        <option value="in_progress">In Progress</option>
        <option value="completed">Completed</option>
    </select>
    <canvas id="taskChart"></canvas>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var taskData = @json($taskCounts);
        var ctx = document.getElementById('taskChart').getContext('2d');
        var taskChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Pending', 'In Progress', 'Completed'],
                datasets: [{
                    label: 'Task Status',
                    data: taskData,
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                }]
            },
        });

        function filterTasks() {
            var status = document.getElementById('statusFilter').value;
            
        }
    </script>
@endsection