<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Appointment Status') }}
        </h2>
    </x-slot>

    <main class="p-8">

        <div class="bg-white p-8 rounded-lg shadow-lg">
            @foreach ($appointmentinfo as $info)
            <h1>Hi {{$info->name}}! Your appointment is currently: {{ $info->status }} </h1>
            @endforeach

        </div>

    </main>

</x-app-layout>
