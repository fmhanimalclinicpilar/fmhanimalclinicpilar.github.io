<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>FMH Animal Clinic | Dashboard</title>

  <link rel="stylesheet" href="{{ asset('css/animal.css') }}">

</head>
<body class="dashboard-page">

  <header class="app-header">

    <h2 class="logo"><x-clinic-icon name="paw" size="1.2em" /> FMH Animal Clinic</h2>

    <nav class="app-nav">

      <a href="{{ route('dashboard') }}" class="active">
        Dashboard
      </a>

      <a href="{{ route('appointments.create') }}">
        Book Appointment
      </a>

      <a href="{{ route('pets.index') }}">
        My Pets
      </a>

      <a href="{{ route('appointments.index') }}">
        Appointment History
      </a>

    </nav>

    <a href="{{ route('profile.edit') }}" class="profile-link">
      <x-clinic-icon name="user" size="1em" /> Profile
    </a>

  </header>

  <main class="dashboard-container">

    <div class="welcome-section">

      <h1>Welcome, {{ auth()->user()->name }}!</h1>

      <p>
        Manage your appointments and pet records here.
      </p>

    </div>

    <section class="quick-actions">

      <a href="{{ route('appointments.create') }}" class="dashboard-card">

        <span class="dashboard-icon">
          <x-clinic-icon name="calendar" size="1em" />
        </span>

        <h3>Book Appointment</h3>

        <p>
          Schedule a veterinary appointment for your pet.
        </p>

      </a>

      <a href="{{ route('pets.index') }}" class="dashboard-card">

        <span class="dashboard-icon">
          <x-clinic-icon name="paw" size="1em" />
        </span>

        <h3>My Pets</h3>

        <p>
          View and manage your registered pets.
        </p>

      </a>

      <a href="{{ route('appointments.index') }}" class="dashboard-card">

        <span class="dashboard-icon">
          <x-clinic-icon name="clipboard" size="1em" />
        </span>

        <h3>Appointment History</h3>

        <p>
          View your previous and upcoming appointments.
        </p>

      </a>

    </section>

    <section class="dashboard-summary">

      <div class="summary-box">

        <span><x-clinic-icon name="paw" size="1em" /></span>

        <div>

          <h3>{{ $petCount }}</h3>

          <p>Registered Pets</p>

        </div>

      </div>

      <div class="summary-box">

        <span><x-clinic-icon name="calendar" size="1em" /></span>

        <div>

          <h3>{{ $upcomingAppointmentCount }}</h3>

          <p>Upcoming Appointments</p>

        </div>

      </div>

      <div class="summary-box">

        <span><x-clinic-icon name="clipboard" size="1em" /></span>

        <div>

          <h3>{{ $completedAppointmentCount }}</h3>

          <p>Completed Appointments</p>

        </div>

      </div>

    </section>

  </main>

</body>
</html>