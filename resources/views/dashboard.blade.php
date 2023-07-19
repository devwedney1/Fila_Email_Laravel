<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <form action="">
        @csrf
        <div class="def">
            <div class="subject">
                <label for="">Subject:</label>
                <input type="text">
            </div>
            <div class="message">
                <label for="">Message:</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="emails_list">
                <label for="">Emails List:</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form>

</x-app-layout>