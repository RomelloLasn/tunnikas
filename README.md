# Laravel Assignment: Basic CRUD Operations with Seeder, Factory, and ChartJS - Task Management System

### **Objective:**
To demonstrate the ability to build a simple web application in Laravel that performs basic CRUD (Create, Read, Update, Delete) operations using database seeding, model factories, and integrates **ChartJS** to visualize task data.

---

## **Requirements:**

1. **Laravel Setup**:
   - Set up a new Laravel project.
   - Configure the `.env` file to connect to a MySQL database (or SQLite, depending on your local setup).

2. **Create a Task Model and Migration**:
   - Create a `Task` model and corresponding migration.
   - The `tasks` table should include the following fields:
     - `id`: Primary key (auto-incremented).
     - `title`: String (required, max length 255).
     - `description`: Text (optional).
     - `status`: Enum with values `pending`, `in_progress`, and `completed` (required).
     - `due_date`: Date (optional).
     - `created_at` and `updated_at` timestamps.

3. **CRUD Operations (Routes and Controllers)**:
   - Implement CRUD operations for tasks, allowing users to:
     - Create a new task.
     - View all tasks.
     - View a single task's details.
     - Edit and update a task.
     - Delete a task.

4. **Blade Views**:
   - Create Blade views for:
     - Listing all tasks.
     - Displaying a form to create or edit tasks.
     - Viewing details of a specific task.

5. **Form Validation**:
   - Apply validation rules to ensure:
     - Task `title` is required and has a maximum length of 255 characters.
     - `status` must be either `pending`, `in_progress`, or `completed`.
     - `due_date` is a valid date if provided.

6. **Database Seeding (Seeder)**:
   - Create a Seeder to populate the `tasks` table with at least 10 records.

7. **Factory**:
   - Use a Factory to generate fake task data, including:
     - Random titles.
     - Optional descriptions.
     - Random statuses (from the `status` enum).
     - Optional due dates.

8. **Chart Visualization with ChartJS**:
   - Integrate **ChartJS** to visualize the distribution of tasks by their `status`. This involves:
     - Creating a chart (e.g., bar, pie, or doughnut) to show the count of tasks in each status category (`pending`, `in_progress`, `completed`).
     - Retrieve task counts by `status` in your controller and pass this data to the view.
     - Embed a **ChartJS** chart in a Blade template that visualizes the data.

9. **Bonus (Optional)**:
   - Implement interactive filtering of tasks by their `status` on the chart.
   - Add pagination to the task list.
   - Add a search feature to filter tasks by title.

---

## **Instructions:**

1. **Submission**:
   - Push your code to a GitHub repository.
   - Provide a link to the repository along with setup instructions in the `README.md` file.

2. **Grading Criteria**:
   - Correct implementation of CRUD operations.
   - Proper use of Laravel features like migrations, Eloquent, Seeders, and Factories.
   - User-friendly Blade views and forms with appropriate validation.
   - Accurate visualization of task data using ChartJS.
   - Clean and readable code, with comments where necessary.

---

## **Steps to Get Started**:

1. **Install Laravel**:
   - Create a new Laravel project using Composer.

2. **Create a Migration and Model for Tasks**:
   - Set up a model and migration for tasks with appropriate fields and relationships.

3. **Create a Resource Controller**:
   - Create a resource controller to handle all CRUD operations for tasks.

4. **Set Up Routes**:
   - Define routes for the CRUD operations and a route for displaying the chart visualization.

5. **Use Blade for Task Views**:
   - Develop Blade views for creating, editing, and listing tasks, as well as for displaying the chart.

6. **Implement a Task Factory**:
   - Set up a factory to generate random data for tasks, to be used in the database seeding process.

7. **Integrate ChartJS**:
   - Add ChartJS to your project, either using a CDN or npm, and set up a chart in one of your views to display the task status distribution.
   - Or use https://github.com/icehouse-ventures/laravel-chartjs

---

## **Deliverables**:
1. A fully functional Laravel application with CRUD operations for tasks.
2. A database seeded with sample task data using factories and seeders.
3. A chart created with **ChartJS** that visualizes the number of tasks by their status.
