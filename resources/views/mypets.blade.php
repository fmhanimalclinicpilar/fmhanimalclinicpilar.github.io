<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>FMH Animal Clinic | My Pets</title>

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

      <a href="{{ route('pets.index') }}" class="active">
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

  <main class="pets-container">

    <div class="page-heading pet-heading">

      <div>

        <h1>My Pets</h1>

        <p>
          Manage your registered pets.
        </p>

      </div>

      <a href="{{ route('pets.create') }}" class="primary-btn">
        + Add New Pet
      </a>

    </div>

    <div class="petlist">
      @forelse ($pets as $pet)
      <div class="pet-card">

        <div class="pet-icon">
          <x-clinic-icon name="paw" size="1em" />
        </div>

        <div class="pet-info">

          <h2>{{ $pet->name }}</h2>

          <p>
            <strong>Species:</strong>
            {{ ucfirst($pet->species) }}
          </p>

          <p>
            <strong>Breed:</strong>
            {{ $pet->breed }}
          </p>

          <p>
            <strong>Sex:</strong>
            {{ ucfirst($pet->sex) }}
          </p>

          <p>
            <strong>Age:</strong>
            {{ $pet->age }} years old
          </p>

        </div>

        <div class="pet-actions">

          <a href="{{ route('appointments.create') }}">
            Book Appointment
          </a>

        </div>

      </div>
      @empty
      <p>No pets registered yet.</p>
      @endforelse

    </div>

  </main>

</body>
</html>