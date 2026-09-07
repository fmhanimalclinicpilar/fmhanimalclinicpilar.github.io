<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>FMH Animal Clinic | Appointment</title>

  <link rel="stylesheet" href="{{ asset('css/animal.css') }}">

</head>
<body class="dashboard-page">

  <header class="app-header">

    <h2 class="logo"><x-clinic-icon name="paw" size="1.2em" /> FMH Animal Clinic</h2>

    <nav class="app-nav">

      <a href="{{ route('dashboard') }}">
        Dashboard
      </a>

      <a href="{{ route('appointments.create') }}" class="active">
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

  <main class="form-page">

    <div class="page-heading">

      <h1>Book an Appointment</h1>

      <p>
        Schedule a veterinary appointment for your pet.
      </p>

    </div>

    <form class="appointment-form" action="{{ route('appointments.store') }}" method="POST">
      @csrf

      <h2>Pet Information</h2>

      <div class="form-row">

        <div class="form-group">

          <label for="petname">
            Pet Name
          </label>

          <input
            type="text"
            id="petname"
            name="petname"
            placeholder="Enter your pet's name"
            required>

        </div>

        <div class="form-group">

          <label for="species">
            Species
          </label>

          <select
            name="species"
            id="species"
            required>

            <option value="" disabled selected>
              Select species
            </option>

            <option value="dog">
              Dog
            </option>

            <option value="cat">
              Cat
            </option>

            <option value="other">
              Other
            </option>

          </select>

        </div>

      </div>

      <div class="form-row">

        <div class="form-group">

          <label for="breed">
            Breed
          </label>

          <input
            type="text"
            id="breed"
            name="breed"
            placeholder="Enter your pet's breed"
            required>

        </div>

        <div class="form-group">

          <label for="sex">
            Sex
          </label>

          <select
            name="sex"
            id="sex"
            required>

            <option value="" disabled selected>
              Select sex
            </option>

            <option value="male">
              Male
            </option>

            <option value="female">
              Female
            </option>

          </select>

        </div>

      </div>

      <div class="form-group">

        <label for="age">
          Age
        </label>

        <input
          type="number"
          id="age"
          name="age"
          placeholder="Enter your pet's age"
          min="0"
          max="50"
          required>

      </div>

      <h2 class="form-section-title">
        Appointment Information
      </h2>

      <div class="form-group">

        <label for="service">
          Service
        </label>

        <select
          name="service"
          id="service"
          required>

          <option value="" disabled selected>
            Choose a service
          </option>

          <option value="consultation">
            Consultation
          </option>

          <option value="vaccination">
            Vaccination
          </option>

          <option value="grooming">
            Grooming
          </option>

        </select>

      </div>

      <div class="form-row">


        <div class="form-group">

          <label for="date">
            Appointment Date
          </label>

          <input
            type="date"
            id="date"
            name="date"
            required>

        </div>

        <div class="form-group">

          <label for="time">
            Appointment Time
          </label>

          <input
            type="time"
            id="time"
            name="time"
            required>

        </div>

      </div>

      <div class="form-group">

        <label for="notes">
          Reason / Notes
        </label>

        <textarea
          name="notes"
          id="notes"
          rows="5"
          placeholder="Tell us about your pet's concern"></textarea>

      </div>

      <button class="primary-btn" type="submit">
        <x-clinic-icon name="calendar" size="1em" /> Book Appointment
      </button>

    </form>

  </main>

</body>
</html>