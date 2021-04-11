    <footer class="footer max-w-7xl mx-auto px-2">
        <div class="container mx-auto px-6">
            <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                <div class="sm:w-2/3 text-center py-6">
                    <p class="text-sm text-blue-700 font-bold mb-2">
                        © {{ now()->year }} Ohioer - Generated in {{ round(microtime(true) - LARAVEL_START, 3) * 1000 }}ms
                    </p>
                </div>
            </div>
        </div>
    </footer>

</div>
</body>
</html>
