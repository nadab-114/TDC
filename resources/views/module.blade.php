<x-app-layout>
    <x-side-layout>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="./node_modules/preline/dist/preline.js"></script>

        <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <x-modulenav/>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <x-modulecontent/>
                </div>
            </div>
        </div>

    </x-app-layout>
</x-side-layout>