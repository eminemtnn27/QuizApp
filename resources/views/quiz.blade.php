<x-app-layout>
    <x-slot name="header"> {{$quiz->title}}  </x-slot> 
    <div class="card"  >
        <div class="card-body">  
                <form method="post" action="{{route('quiz.result',$quiz->slug)}}">
                @foreach ($quiz->questions as $question )
                    <strong> * {{$loop->iteration}} </strong>{{$question->question}} 
                    @if ($question->image)
                        <img src="{{asset($question->image)}}" style="width:50%" class="img-responsive" >
                    @endif
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="{{$question->id}}" id="quiz{{$question->id}}1" value="answer1" checked>
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                                {{$question->answer1}}
                            </label> 
                    </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{$question->id}}" id="quiz{{$question->id}}2" value="answer2" checked>
                            <label class="form-check-label" for="quiz{{$question->id}}2">
                                {{$question->answer2}}
                            </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{$question->id}}" id="quiz{{$question->id}}3" value="answer3" checked>
                            <label class="form-check-label" for="quiz{{$question->id}}3">
                                {{$question->answer3}}
                            </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{$question->id}}" id="quiz{{$question->id}}4" value="answer4" checked>
                            <label class="form-check-label" for="quiz{{$question->id}}4">
                                {{$question->answer4}}
                            </label>
                    </div> 
                     <hr>    
                @endforeach
                <button type="submit" class="btn btn-success btn-sm btn-block"> Sınavı Bitir </button>
                </form> 
        </div>
    </div>
</x-app-layout>
 