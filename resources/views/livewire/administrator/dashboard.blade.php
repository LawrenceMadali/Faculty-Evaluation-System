<div>
    <div class="mt-5">
        <section class="text-gray-600 bg-white rounded-md body-font">
            <div class="container px-5 py-10 mx-auto">
                <div class="flex flex-wrap -m-4 text-center">
                    <div class="p-4 sm:w-1/6 w-1/2">
                        <h2 class="font-medium sm:text-4xl text-3xl text-gray-900">{{ $users }}</h2>
                        <p class="leading-relaxed">Total Users</p>
                    </div>
                    <div class="p-4 sm:w-1/6 w-1/2">
                        <h2 class="font-medium sm:text-4xl text-3xl text-gray-900">{{ $deans }}</h2>
                        <p class="leading-relaxed">Dean</p>
                    </div>
                    <div class="p-4 sm:w-1/6 w-1/2">
                        <h2 class="font-medium sm:text-4xl text-3xl text-gray-900">{{ $secretaries }}</h2>
                        <p class="leading-relaxed">Secretary</p>
                    </div>
                    <div class="p-4 sm:w-1/6 w-1/2">
                        <h2 class="font-medium sm:text-4xl text-3xl text-gray-900">{{ $hrs }}</h2>
                        <p class="leading-relaxed">Human Resources</p>
                    </div>
                    <div class="p-4 sm:w-1/6 w-1/2">
                        <h2 class="font-medium sm:text-4xl text-3xl text-gray-900">{{ $instructors }}</h2>
                        <p class="leading-relaxed">Instructor</p>
                    </div>
                    <div class="p-4 sm:w-1/6 w-1/2">
                        <h2 class="font-medium sm:text-4xl text-3xl text-gray-900">{{ $students }}</h2>
                        <p class="leading-relaxed">Student</p>
                    </div>
                </div>
            </div>
        </section>
        <x-jet-section-border/>
        <div class="space-y-56">
                {{-- <div>
                    @livewire('administrator.charts.users-chart')
                </div> --}}
            @if (auth()->user()->college_id == 1)
            <div class="space-y-56">
                <div>
                    @livewire('administrator.charts.college-of-computer-studies.first-semester')
                </div>
                <div>
                    @livewire('administrator.charts.college-of-computer-studies.second-semester')
                </div>
            </div>
            @endif
            @if (auth()->user()->college_id == 2)
            <div class="space-y-56">
                <div>
                    @livewire('administrator.charts.college-of-accountancy.first-semester')
                </div>
                <div>
                    @livewire('administrator.charts.college-of-accountancy.second-semester')
                </div>
            </div>
            @endif
            @if (auth()->user()->college_id == 3)
            <div class="space-y-56">
                <div>
                    @livewire('administrator.charts.college-of-business.first-semester')
                </div>
                <div>
                    @livewire('administrator.charts.college-of-business.second-semester')
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
