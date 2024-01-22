<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <h2 class="text-2xl font-bold mb-4">Modifier une Note</h2>

                    <form action="{{ route('notes.update', $note->id) }}" method="POST">
                        @csrf
                        @method('PATCH') 

                        <label for="content" class="block mb-2">Contenu de la note :</label>
                        <textarea name="content" id="content" class="w-full border p-2 mb-4" required>{{ $note->content }}</textarea>

                        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Enregistrer les modifications</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
