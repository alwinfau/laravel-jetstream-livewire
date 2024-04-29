<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="tab-section bg-gray-100 p-5 rounded-lg backdrop-filter backdrop-blur-lg bg-opacity-40 w-[1200px] min-h-[400px] border-2 border-indigo-200">
                <div class="flex flex-wrap gap-1">
                    <button
                        class="p-4 rounded-lg text-gray-700 font-bold hover:bg-gray-300 hover:bg-opacity-40 flex-grow w-80 "
                        data-tab-target="#tab1">Profile</button>
                    <button
                        class="p-4 rounded-lg font-bold hover:bg-gray-300 hover:bg-opacity-40 text-gray-700 flex-grow w-80 "
                        data-tab-target="#tab2">Settings</button>
                    <button
                        class="p-4 rounded-lg font-bold hover:bg-gray-300 hover:bg-opacity-40 text-gray-700 flex-grow w-80"
                        data-tab-target="#tab3">Contact</button>
                </div>

                <div wire:loading>
                    <!-- Placeholder untuk menunjukkan bahwa sedang memuat -->
                    Loading...
                </div>


                <div class="mt-4">
                    <div id="tab1" class="tab-content text-gray-700">
                        <h4 class="font-bold mt-9 mb-4 text-2xl">Profile Info</h4>
                        <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae quidem impedit
                            doloremque explicabo illum
                            quos.
                            Molestias aspernatur rem itaque doloribus culpa similique rerum provident id quos sed.</p>

                    </div>
                    <div id="tab2" class="hidden tab-content text-gray-700">
                        <h4 class="font-bold mt-9 mb-4 text-2xl">Settings Info</h4>
                        <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias aspernatur
                            rem itaque
                            doloribus culpa similique rerum provident id quos sed.</p>
                    </div>
                    <div id="tab3" class="hidden tab-content text-gray-700">
                        <h4 class="font-bold mt-9 mb-4 text-2xl">Contact Info</h4>
                        <p class="text-xl">Phone no : 0987654321 <br>Address : Netherland</p>
                    </div>
                </div>
            </div>


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>

</x-app-layout>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tabs = document.querySelectorAll('[data-tab-target]');
        const activeClass = 'bg-indigo-200';

        // Select first tab by default
        tabs[0].classList.add(activeClass);
        document.querySelector('#tab1').classList.remove('hidden');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const targetContent = document.querySelector(tab.dataset.tabTarget);

                document.querySelectorAll('.tab-content').forEach(content => content.classList
                    .add(
                        'hidden'));
                targetContent.classList.remove('hidden');

                // Remove active class from all tabs
                document.querySelectorAll('.bg-indigo-200').forEach(activeTab => activeTab
                    .classList.remove(
                        activeClass));

                // Add active class to clicked tab
                tab.classList.add(activeClass);
            });
        });
    });
</script>
