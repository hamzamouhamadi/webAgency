@props(['listing'])

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-2 md:block"
      src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/webAgencyBlue.png')}}" alt="" />
    <div>
      <h3 class="text-2xl font-bold">
        <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
      </h3>
      <div class="text-xl mb-4">{{$listing->company}}</div>
      <x-listing-tags :tagsCsv="$listing->tags" />
      <div class="text-lg mt-4">
        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
      </div>
    </div>
  </div>
</x-card>