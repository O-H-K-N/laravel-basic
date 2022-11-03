<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      一覧 - お問い合わせ
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          index<br>
          {{-- 新規作成ページへのリンク --}}
          <a href="{{ route('contacts.create') }}" class="text-blue-500">
            新規登録
          </a>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
