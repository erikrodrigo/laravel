<x-admin-layout>
    <div class="container py-12">
        @livewire('admin.create-category')
    </div>
    @push('script')
        <script>
            Livewire.on('deleteCategory', categorySlug => {
                Swal.fire({
                    title: 'Vay vaya',
                    text: "te equivocaste",
                    icon: 'Cuidadpo',
                    showCancelButton: true,
                    confirmButtonColor: '#3cac9c',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si ni modo, borrar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('admin.create-category', 'delete', categorySlug)
                        Swal.fire(
                            'borrado pues!',
                            'ok.',
                            'venga'
                        )
                    }
                })
            });
        </script>
    @endpush
</x-admin-layout>
