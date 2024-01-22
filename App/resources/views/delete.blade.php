
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <h2 class="text-2xl font-bold mb-4">Supprimer une Note</h2>

                    <p>Êtes-vous sûr de vouloir supprimer cette note ?</p>

                    <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="bg-red-500 text-white p-2 rounded">Confirmer la suppression</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
