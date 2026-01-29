@extends('layout')

@section('content')
    <div class="flex flex-col items-center justify-center h-screen w-full">
        
        <!-- 1. The GIF (Fixed Size) -->
        <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExbXN5eWk4Z3BwZGR4YmJ3ZWh4eGZ5eXJ4YmJ3ZWh4eGZ5eXJ4YmJ3ZSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/cLS1cfxvGOPVpf9g3y/giphy.gif" 
             alt="Cute Cat" 
             style="width: 200px; height: 200px; object-fit: cover; border-radius: 15px; margin-bottom: 20px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);">

        <!-- 2. The Question -->
        <h1 class="text-love-red animate-heartbeat" 
            style="font-size: 2.5rem; font-weight: 800; margin-bottom: 40px; color: #ff4d6d; text-shadow: 2px 2px 0px rgba(0,0,0,0.1);">
            Will you be my Valentine? 🌹
        </h1>

        <!-- 3. The Buttons Container -->
        <div style="display: flex; gap: 20px; position: relative; width: 100%; justify-content: center; height: 100px;">
            
            <!-- YES BUTTON (Hard-coded Green) -->
            <a href="{{ route('yay') }}" 
               style="background-color: #22c55e; color: white; padding: 15px 40px; border-radius: 50px; font-size: 24px; font-weight: bold; text-decoration: none; box-shadow: 0 5px 0 #15803d; transition: transform 0.1s;"
               onmouseover="this.style.transform='scale(1.1)'" 
               onmouseout="this.style.transform='scale(1)'">
                YES! 😍
            </a>

            <!-- NO BUTTON (Hard-coded Red) -->
            <button id="noBtn" 
                    style="background-color: #ef4444; color: white; padding: 15px 40px; border-radius: 50px; font-size: 24px; font-weight: bold; border: none; cursor: pointer; position: absolute; box-shadow: 0 5px 0 #b91c1c;">
                No 😢
            </button>
        </div>
    </div>

    <!-- The Logic -->
    <script>
        const noBtn = document.getElementById('noBtn');
        
        function moveButton() {
            // Make sure it doesn't go off screen
            const maxWidth = window.innerWidth - 150;
            const maxHeight = window.innerHeight - 150;
            
            const randomX = Math.floor(Math.random() * maxWidth);
            const randomY = Math.floor(Math.random() * maxHeight);
            
            noBtn.style.position = 'fixed';
            noBtn.style.left = randomX + 'px';
            noBtn.style.top = randomY + 'px';
        }

        noBtn.addEventListener('mouseover', moveButton);
        noBtn.addEventListener('click', moveButton);
        noBtn.addEventListener('touchstart', moveButton);
    </script>
@endsection