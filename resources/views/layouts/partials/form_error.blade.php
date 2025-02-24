@if($errors->any())
    <div  class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">

        <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
            <ul>
                @foreach($errors->all() as $error)
                    <li><i class="fas fa-triangle-exclamation flex-shrink-0 text-red-700 my-1"></i> {{$error}}</li>
                @endforeach
            </ul>
        </div>
        <button type="button" class="justify-center items-center ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300 alert-hidden">

            <i class="fas fa-xmark"></i>
        </button>
    </div>

@endif

<script>
    var alert_del = document.querySelectorAll('.alert-hidden');
    alert_del.forEach((x) =>
        x.addEventListener('click', function () {
            x.parentElement.classList.add('hidden');
        })
    );
</script>
