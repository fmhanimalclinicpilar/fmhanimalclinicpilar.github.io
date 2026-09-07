<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>FMH Animal Clinic | Appointment History</title>

  <link rel="stylesheet" href="{{ asset('css/animal.css') }}">

</head>
<body class="dashboard-page">

  <header class="app-header">

    <h2 class="logo"><x-clinic-icon name="paw" size="1.2em" /> FMH Animal Clinic</h2>

    <nav class="app-nav">

      <a href="{{ route('dashboard') }}">
        Dashboard
      </a>

      <a href="{{ route('appointments.create') }}">
        Book Appointment
      </a>

      <a href="{{ route('pets.index') }}">
        My Pets
      </a>

      <a href="{{ route('appointments.index') }}" class="active">
        Appointment History
      </a>

    </nav>

    <a href="{{ route('profile.edit') }}" class="profile-link">
      <x-clinic-icon name="user" size="1em" /> Profile
    </a>

  </header>

  <main class="history-container">

    <div class="page-heading">

      <h1>Appointment History</h1>

      <p>
        View your previous and upcoming veterinary appointments.
      </p>

    </div>

    <section class="appointment-list">
      @forelse ($appointments as $appointment)
      <div class="appointment-card">

        <div class="appointment-header">

          <div>

            <h2>{{ $appointment->pet->name }}</h2>

            <p>
              {{ $appointment->pet->breed }}
            </p>

          </div>

          <span class="appointment-status upcoming">
            {{ ucfirst($appointment->status) }}
          </span>

        </div>

        <div class="appointment-details">

          <p>
            <strong>Service:</strong>
            {{ ucfirst($appointment->service) }}
          </p>

          <p>
            <strong>Date:</strong>
            {{ $appointment->appointment_date->format('F j, Y') }}
          </p>

          <p>
            <strong>Time:</strong>
            {{ $appointment->appointment_time->format('g:i A') }}
          </p>

        </div>

      </div>
      @empty
      <div class="empty-history">

        <span>
          <x-clinic-icon name="clipboard" size="1em" />
        </span>

        <h2>No More Appointments</h2>

        <p>
          Your previous and upcoming appointments will appear here.
        </p>

      </div>
      @endforelse

    </section>

  </main>

</body>
</html>