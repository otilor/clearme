<div class="mx-auto my-3">
    @if (auth()->user()->onboarding()->inProgress())
        <div>


            @foreach (auth()->user()->onboarding()->steps as $step)
                <span>
				@if($step->complete())
                        <i class="fa fa-check-square-o fa-fw"></i>
                        <s>{{ $loop->iteration }}. {{ $step->title }}</s>
                    @else
                        <i class="fa fa-square-o fa-fw"></i>
                        <span class="text-black">{{ $loop->iteration }}. {{ $step->title }}</span>
                    @endif
			</span>

                <a class="btn btn-danger" href="{{ $step->link }}" {{ $step->complete() ? 'disabled' : '' }}>
                    {{ $step->cta }}
                </a>
            @endforeach

        </div>
    @endif
</div>
