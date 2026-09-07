<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>FMH Animal Clinic | Profile</title>

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

      <a href="{{ route('appointments.index') }}">
        Appointment History
      </a>

    </nav>

    <a href="{{ route('profile.edit') }}" class="profile-link active-profile">
      <x-clinic-icon name="user" size="1em" /> Profile
    </a>

  </header>

  <main class="profile-container">

    <div class="page-heading">

      <h1>My Profile</h1>

      <p>
        Manage your personal account information.
      </p>

    </div>

    <section class="profile-card">

      <div class="profile-avatar">
        <x-clinic-icon name="user" size="1em" />
      </div>

      <div class="profile-info">

        <h2>{{ auth()->user()->name }}</h2>

        <p>
          FMH Animal Clinic Pet Owner
        </p>

      </div>

      <div class="profile-details">

        <div class="profile-detail">

          <span>
            <x-clinic-icon name="user" size="1em" />
          </span>

          <div>

            <small>Full Name</small>

            <p>
              {{ auth()->user()->name }}
            </p>

          </div>

        </div>

        <div class="profile-detail">

          <span>
            <x-clinic-icon name="mail" size="1em" />
          </span>

          <div>

            <small>Email Address</small>

            <p>
              {{ auth()->user()->email }}
            </p>

          </div>

        </div>

        <div class="profile-detail">

          <span>
            <x-clinic-icon name="phone" size="1em" />
          </span>

          <div>

            <small>Mobile Number</small>

            <p>
              Contact information available in your account settings.
            </p>

          </div>

        </div>

      </div>

      <div class="profile-actions">

        <a href="#" class="primary-btn">
          Edit Profile
        </a>

        <a href="{{ route('login') }}" class="cancel-btn">
          Log Out
        </a>

      </div>

    </section>

  </main>

</body>
</html>