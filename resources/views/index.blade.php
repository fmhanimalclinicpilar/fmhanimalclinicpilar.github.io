<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FMH Animal Clinic</title>

  <link rel="stylesheet" href="{{ asset('css/animal.css') }}">
</head>
<body class="home-page">

  <header class="home-header">

    <div class="logo">

      <x-clinic-icon name="paw" size="1.2em" /> FMH Animal Clinic

    </div>

    <nav class="navigator">

      <a href="#home">Home</a>
      <a href="#services">Services</a>
      <a href="#aboutus">About Us</a>
      <a href="#contact">Contact</a>
      <a href="{{ route('login') }}">Login</a>

    </nav>

  </header>

  <section id="home" class="hero">

    <div>

      <h1>Caring For Your Pets Like Family</h1>

      <p>
        Book appointments, manage pet records, and experience quality veterinary care.
      </p>

      <a href="{{ route('login') }}" class="bookbtn">
        Book Appointment
      </a>

    </div>

  </section>

  <section id="services" class="services">

    <h2>Our Services</h2>

    <p>
      Professional veterinary services for your beloved pets.
    </p>

    <div><x-clinic-icon name="paw" size="1.2em" /> Consultation</div>

    <div><x-clinic-icon name="syringe" size="1.2em" /> Vaccination</div>

    <div><x-clinic-icon name="scissors" size="1.2em" /> Grooming</div>

  </section>

  <section id="aboutus" class="contact">

    <h2>About Us</h2>

    <p>
      FMH Animal Clinic is dedicated to providing quality veterinary
      care for pets and their owners.
    </p>

    <p>
      Our goal is to make every pet feel safe, comfortable, and cared for.
    </p>

  </section>

  <section id="contact" class="contact">

    <h2>Contact Us</h2>

    <p>Las Pinas City</p>

    <p>0932-314-5969</p>

    <p><a href="mailto:hello@fmhanimalclinic.test">hello@fmhanimalclinic.test</a></p>

  </section>

  <footer>
    Copyright 2026 FMH Animal Clinic | All Rights Reserved
  </footer>

</body>
</html>