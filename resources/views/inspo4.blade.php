<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Diagonal Split Layout</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body class="bg-white">

  <!-- Diagonal Split Section -->
  <section class="relative h-screen overflow-hidden">
    <!-- Left - Orange Diagonal -->
    <div class="absolute top-0 left-0 w-full md:w-1/2 h-full bg-orange-500 clip-diagonal-left"></div>

    <!-- Right - White Side -->
    <div class="absolute top-0 right-0 w-full md:w-1/2 h-full bg-white clip-diagonal-right"></div>

    <!-- Content Example -->
    <div class="relative z-10 flex flex-col md:flex-row h-full items-center justify-center px-6 text-white">
      <!-- Left Content -->
      <div class="md:w-1/2 text-center md:text-left mb-10 md:mb-0">
        <h2 class="text-3xl md:text-4xl font-bold">Left Side Content</h2>
        <p class="mt-4 text-lg opacity-90">This area is on the orange diagonal section.</p>
      </div>

      <!-- Right Content -->
      <div class="md:w-1/2 text-center md:text-right">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Right Side Content</h2>
        <p class="mt-4 text-lg text-gray-700">This area is on the white diagonal section.</p>
      </div>
    </div>
  </section>

  <style>
    .clip-diagonal-left {
      clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
    }

    .clip-diagonal-right {
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }

    @media (min-width: 768px) {
      .clip-diagonal-left {
        clip-path: polygon(0 0, 100% 0, 90% 100%, 0% 100%);
      }

      .clip-diagonal-right {
        clip-path: polygon(10% 0, 100% 0, 100% 100%, 0 100%);
      }
    }
  </style>

</body>
</html>