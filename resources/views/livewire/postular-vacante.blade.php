<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="font-bold text-2xl text-center my-5">
        Postularme a la vacante
    </h3>

    <form class="w-96 mt-5">
        <div class="mb-4">
            <x-input-label  for="cv" :value="__('Curriculum o hoja de vida')" />
            <x-text-input id="cv" type="file" accept=".pdf" class="block mt-1 w-full" />
        </div>
    </form>
</div>
