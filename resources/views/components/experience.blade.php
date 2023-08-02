<div class="flex mt-4">
    <span class="self-center font-medium text-orange-600 text-end basis-1/2 w-fit pe-8">
        {{ $workYear[0] }}

        @if (count($workYear) > 1)
        <i class="text-orange-600 fa fa-xs fa-arrow-right-long" aria-hidden="true"></i>

        {{ $workYear[1] }}

        @endif
    </span>
    
    <div class="basis-1/2 ps-2 border-s-2 border-accent-100">

        <p class="font-semibold"> {{ $workCompany }} </p>
        <p> {{ $workDescription }} </p>
        <div class="mt-2">
            @foreach ($workPosition as $key => $val)

            <span class="italic pe-2">  {{ $val }} </span>

            @endforeach
        </div>
    </div>
</div>