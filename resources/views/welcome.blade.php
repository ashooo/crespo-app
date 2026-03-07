<x-layout>
    <x-slot:heading>
        Congratulations Page
    </x-slot:heading>

    <div class="overlay">
        <div class="card">

            <div class="badge">🎉 EXCLUSIVE REWARD 🎉</div>

            <div class="title">
                Congratulations, {{ $name ?? 'Guest' }}!
            </div>

            <img class="iphone" src="https://powermaccenter.com/cdn/shop/files/iPhone_14_Blue_PDP_Image_Position-1A__en-US_f2a941c4-e568-473d-a220-e8c898925dcd.jpg?v=1705401055&width=1920" alt="iPhone">

            <div class="subtitle">
                You have been selected as a <span class="highlight">Lucky Winner</span> 🎁
                <br>
                Claim your brand new <strong>iPhone 14</strong> now!
            </div>

            <button class="btn" onclick="celebrate()">
                Claim Your Prize
            </button>

            <div class="footer">
                Limited time offer. While supplies last.
            </div>

        </div>
    </div>

    @push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #4e008e, #8e2de2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .overlay { position: fixed; inset: 0; background: rgba(0,0,0,0.6); display: flex; justify-content: center; align-items: center; }
        .card { background: #fff; width: 430px; max-width: 92%; border-radius: 20px; padding: 35px 30px; text-align: center; box-shadow: 0 30px 80px rgba(0,0,0,0.5); animation: popIn 0.6s ease-out; position: relative; }
        @keyframes popIn { 0% { transform: scale(0.6); opacity: 0; } 100% { transform: scale(1); opacity: 1; } }
        .badge { background: linear-gradient(45deg, #8e2de2, #4e008e); color: white; padding: 6px 14px; border-radius: 30px; font-size: 12px; font-weight: 600; display: inline-block; margin-bottom: 15px; }
        .title { font-size: 26px; font-weight: 800; margin-bottom: 10px; color: #333; }
        .iphone { width: 160px; margin: 20px auto; animation: float 3s ease-in-out infinite; }
        @keyframes float { 0% { transform: translateY(0px); } 50% { transform: translateY(-10px); } 100% { transform: translateY(0px); } }
        .subtitle { font-size: 15px; color: #555; margin-bottom: 20px; }
        .highlight { color: #8e2de2; font-weight: 700; }
        .btn { background: linear-gradient(45deg, #8e2de2, #4e008e); color: white; border: none; padding: 14px 30px; border-radius: 30px; font-size: 16px; font-weight: 600; cursor: pointer; transition: 0.3s; box-shadow: 0 10px 25px rgba(142,45,226,0.4); }
        .btn:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(142,45,226,0.6); }
        .footer { margin-top: 15px; font-size: 12px; color: #aaa; }
    </style>
    @endpush

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script>
        function celebrate() {
            var duration = 4 * 1000;
            var end = Date.now() + duration;
            (function frame() {
                confetti({ particleCount: 8, angle: 60, spread: 70, origin: { x: 0 } });
                confetti({ particleCount: 8, angle: 120, spread: 70, origin: { x: 1 } });
                if (Date.now() < end) { requestAnimationFrame(frame); }
            }());
        }
        window.onload = function() { celebrate(); }
    </script>
    @endpush

</x-layout>