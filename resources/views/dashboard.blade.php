<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
                    Control Center
                </h2>
                <p class="text-sm text-gray-500 mt-1">
                    Administrative overview & system intelligence
                </p>
            </div>

            <div
                class="inline-flex items-center gap-2
                       px-4 py-2 rounded-xl
                       bg-gradient-to-r from-green-500/10 to-emerald-500/10
                       border border-green-400/20
                       text-green-700 text-xs font-medium">
                ● All systems operational
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-14">

            <!-- ================= HERO OVERVIEW ================= -->
            <div
                class="relative overflow-hidden
                       rounded-3xl
                       bg-gradient-to-br from-indigo-600 to-purple-600
                       p-10 text-white">

                <div class="relative z-10">
                    <h3 class="text-2xl font-semibold">
                        Welcome back, {{ Auth::user()->name }}
                    </h3>

                    <p class="mt-2 text-indigo-100 max-w-2xl">
                        You’re managing a production-ready portfolio system.
                        All content modules are synchronized and running normally.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-4 text-sm">
                        <span class="px-4 py-2 rounded-lg bg-white/10">
                            Role: Administrator
                        </span>
                        <span class="px-4 py-2 rounded-lg bg-white/10">
                            Environment: Production
                        </span>
                        <span class="px-4 py-2 rounded-lg bg-white/10">
                            Region: Global
                        </span>
                    </div>
                </div>

                <!-- ambient -->
                <div class="absolute inset-0 opacity-30">
                    <div class="absolute -top-20 -right-20
                                w-96 h-96
                                bg-white/20 blur-3xl rounded-full"></div>
                </div>
            </div>

            <!-- ================= KEY METRICS ================= -->
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                @php
                    $stats = [
                        ['label'=>'Projects','value'=>\App\Models\Project::count(),'note'=>'Active systems'],
                        ['label'=>'Skills','value'=>\App\Models\Skill::count(),'note'=>'Technical competencies'],
                        ['label'=>'Experience','value'=>\App\Models\Experience::count(),'note'=>'Career records'],
                        ['label'=>'Certificates','value'=>\App\Models\Certificate::count(),'note'=>'Verified credentials'],
                    ];
                @endphp

                @foreach ($stats as $stat)
                <div
                    class="rounded-2xl bg-white p-6
                           border border-gray-100
                           shadow-sm hover:shadow-md transition">

                    <p class="text-sm text-gray-500">{{ $stat['label'] }}</p>
                    <p class="mt-3 text-4xl font-semibold text-gray-900">
                        {{ $stat['value'] }}
                    </p>
                    <p class="mt-2 text-xs text-gray-400">
                        {{ $stat['note'] }}
                    </p>

                </div>
                @endforeach
            </div>

            <!-- ================= MAIN GRID ================= -->
            <div class="grid gap-10 lg:grid-cols-3">

                <!-- ================= ACTIVITY ================= -->
                <div class="lg:col-span-2">

                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-6">
                            Recent Administrative Activity
                        </h3>

                        <ul class="space-y-5 text-sm text-gray-600">

                            <li class="flex gap-4">
                                <span class="mt-1 w-2 h-2 rounded-full bg-indigo-500"></span>
                                Updated portfolio project configuration
                            </li>

                            <li class="flex gap-4">
                                <span class="mt-1 w-2 h-2 rounded-full bg-purple-500"></span>
                                Added new professional certificate
                            </li>

                            <li class="flex gap-4">
                                <span class="mt-1 w-2 h-2 rounded-full bg-cyan-500"></span>
                                Modified skill proficiency levels
                            </li>

                            <li class="flex gap-4">
                                <span class="mt-1 w-2 h-2 rounded-full bg-emerald-500"></span>
                                Experience timeline updated
                            </li>

                        </ul>
                    </div>

                </div>

                <!-- ================= SYSTEM HEALTH ================= -->
                <div class="space-y-6">

                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                        <h3 class="text-sm font-semibold text-gray-900 mb-4">
                            System Health
                        </h3>

                        <ul class="space-y-2 text-sm text-gray-600">
                            <li>✔ Database connected</li>
                            <li>✔ Storage optimized</li>
                            <li>✔ Authentication secured</li>
                            <li>✔ Admin routes protected</li>
                        </ul>
                    </div>

                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                        <h3 class="text-sm font-semibold text-gray-900 mb-4">
                            Portfolio Maturity
                        </h3>

                        <div class="space-y-3">
                            <div class="flex justify-between text-xs text-gray-500">
                                <span>Progress</span>
                                <span>92%</span>
                            </div>

                            <div class="h-2 rounded-full bg-gray-100 overflow-hidden">
                                <div
                                    class="h-full w-[92%]
                                           bg-gradient-to-r
                                           from-indigo-500 to-purple-500">
                                </div>
                            </div>

                            <p class="text-xs text-gray-500">
                                Portfolio is considered production-grade.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- ================= ADVANCED ACTIONS ================= -->
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-6">
                    Advanced Management
                </h3>

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

                    <a href="{{ route('admin.projects.index') }}"
                       class="p-5 rounded-xl border hover:border-indigo-300 transition">
                        <p class="font-medium">Projects</p>
                        <p class="text-xs text-gray-500 mt-1">System architecture & builds</p>
                    </a>

                    <a href="{{ route('admin.skills.index') }}"
                       class="p-5 rounded-xl border hover:border-indigo-300 transition">
                        <p class="font-medium">Skills</p>
                        <p class="text-xs text-gray-500 mt-1">Technical capability matrix</p>
                    </a>

                    <a href="{{ route('admin.experience.index') }}"
                       class="p-5 rounded-xl border hover:border-indigo-300 transition">
                        <p class="font-medium">Experience</p>
                        <p class="text-xs text-gray-500 mt-1">Career timeline & roles</p>
                    </a>

                    <a href="{{ route('admin.certificates.index') }}"
                       class="p-5 rounded-xl border hover:border-indigo-300 transition">
                        <p class="font-medium">Certificates</p>
                        <p class="text-xs text-gray-500 mt-1">Professional credentials</p>
                    </a>

                </div>
            </div>

        </div>
    </div>

    
</x-app-layout>
