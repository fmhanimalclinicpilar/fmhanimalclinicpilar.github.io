<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>FMH Animal Clinic | Add New Pet</title>

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

  <main class="form-page">

    <div class="page-heading">

      <h1>Add New Pet</h1>

      <p>
        Register your pet to manage their information
        and appointments.
      </p>

    </div>

    <form class="pet-form" action="{{ route('pets.store') }}" method="POST">
      @csrf

      <h2>Pet Information</h2>

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
          id="species"
          name="species"
          required>

          <option value="">
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
          id="sex"
          name="sex"
          required>

          <option value="">
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

      <div class="form-group">

        <label for="notes">
          Additional Information
        </label>

        <textarea
          id="notes"
          name="notes"
          rows="4"
          placeholder="Enter any additional information about your pet"></textarea>

      </div>

      <div class="form-buttons">

        <a href="{{ route('pets.index') }}" class="cancel-btn">
          Cancel
        </a>

        <button type="submit" class="primary-btn">
          Save Pet
        </button>

      </div>

    </form>

  </main>

</body>
</html>