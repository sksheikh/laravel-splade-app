<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />

        <div class="mt-8 text-2xl">
            Welcome to your Splade application!

        </div>
        @php
            $renderedMarkdown = 'Hlw this splade content';
        @endphp
        <!-- splade content component -->
        <x-splade-content  as="article" class="text-2xl" :html="$renderedMarkdown" />

        <!--splade data component-->
        {{-- <x-splade-data :default="$user">
            <input v-model="data.name" placeholder="Enter your name" />
            <p>Your name is <span v-text="data.name" /></p>
        </x-splade-data> --}}

        <x-splade-data store="navigation" default="{ opened: false }" />

        <!-- other elements... -->
        <x-splade-defer method="post" url="/user" request="{ user_id: 1}">
            <p v-show="processing">Loading data...</p>
            {{-- <p v-for="data in response" v-text="data.name"/> --}}
            <p v-if="response" v-text="response.name"/>
            <button @click.prevent="reload">Reload</button>
        </x-splade-defer>

    </x-panel>
</x-layout>
