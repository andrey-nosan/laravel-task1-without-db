@extends('layouts.layout')

@section('content')
	@isset($articles)
		<div class="articles-list">
			<div class="col-sm-12 col-md-12">
				<div class="thumbnail category-item">
					<div class="caption">
						@foreach($articles as $article)
							<ul class="list-group">
								<a href="{{ route('article', $article['Id']) }}">
									<li class="list-group-item list-group-item-info news_title">
										{!! $article['Title'] !!}
									</li>
								</a>
							</ul>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	@endisset
@endsection