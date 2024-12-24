<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Timeless Memories - Professional Photography</title>
    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- Add this before your other CSS links -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Add these in the head section -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body>


    @include('layouts.navigation')

    <main>
      @yield('content')
    </main>

    @include('layouts.footer')

  <!-- Bootstrap 5 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Custom Image Dialog -->
    <div class="image-dialog" id="imageDialog">
      <div class="dialog-content">
        <button class="dialog-close" id="dialogClose">
          <i class="fas fa-times"></i>
        </button>
        <button class="dialog-nav prev" id="prevImage">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button class="dialog-nav next" id="nextImage">
          <i class="fas fa-chevron-right"></i>
        </button>
        <img id="dialogImage" src="" alt="Gallery Image" />
      </div>
    </div>
  </body>
</html>
