  <!-- Header / Navigation -->
  <header class="top-0 left-0 z-50 fixed bg-white shadow-md w-full">
      <div class="flex justify-between items-center mx-auto px-6 py-3 max-w-6xl">
          <!-- Logo Placeholder -->
          <div class="flex items-center space-x-3">
              <img src="<?= ('assets/images/logo.jpg'); ?>" alt="Batis Point Logo" class="rounded-full w-12 h-12 object-cover">
              <span class="font-bold text-hunter text-2xl" style="color:#355E3B;">Batis Point</span>
          </div>
          <!-- Navigation Links -->
          <nav class="hidden md:flex space-x-8 font-medium text-gray-800">
              <a href="<?= ('gallery'); ?>" class="hover:bg-opacity-90 px-6 py-3 rounded-lg font-semibold text-gray-100 transition" style="background-color:#355E3B;">Gallery</a>
              <a href="<?= ('inclusions'); ?>" class="bg-opacity-90 px-6 py-3 rounded-lg font-semibold text-gray-100 transition" style="background-color:#355E3B;">Inclusions</a>
              <a href="<?= ('inquire'); ?>" class="hover:bg-opacity-90 px-6 py-3 rounded-lg font-semibold text-gray-100 transition" style="background-color:#355E3B;">Inquire</a>
              <a href="<?= ('moodboard'); ?>" class="bg-opacity-90 px-6 py-3 rounded-lg font-semibold text-gray-100 transition" style="background-color:#355E3B;">Moodboard</a>
              <a href="<?= ('roadmap'); ?>" class="hover:bg-opacity-90 px-6 py-3 rounded-lg font-semibold text-gray-100 transition" style="background-color:#355E3B;">Roadmap</a>

          </nav>
          <!-- Mobile Menu Button -->
          <button id="menuBtn" class="md:hidden focus:outline-none text-hunter" style="color:#355E3B;">
              ☰
          </button>
      </div>
      <!-- Mobile Dropdown Menu -->
      <div id="mobileMenu" class="hidden md:hidden bg-white shadow-inner">
          <a href="<?= ('gallery'); ?>" class="block hover:bg-gray-100 px-6 py-3 border-gray-200 border-b text-gray-800">Gallery</a>
          <a href="<?= ('inclusions'); ?>" class="block hover:bg-gray-100 px-6 py-3 border-gray-200 border-b text-gray-800">Inclusions</a>
          <a href="<?= ('inquiry'); ?>" class="block hover:bg-gray-100 px-6 py-3 border-gray-200 border-b text-gray-800">Inquiry</a>
          <a href="<?= ('moodboard'); ?>" class="block hover:bg-gray-100 px-6 py-3 border-gray-200 border-b text-gray-800">Moodboard</a>
          <a href="<?= ('roadmap'); ?>" class="block hover:bg-gray-100 px-6 py-3 border-gray-200 border-b text-gray-800">Roadmap</a>

      </div>
  </header>

  <!-- Spacer <div class="h-20"></div> -->