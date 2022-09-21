<button {{ $attributes->merge(['type' => 'submit', 'class' => 'ml-3 inline-flex justify-center rounded-md border
  border-transparent bg-red-500 py-2 px-4 text-sm font-medium
  text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']) }}>
  {{ $slot }}
</button>
