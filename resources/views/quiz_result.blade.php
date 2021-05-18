<x-app-layout>
    <x-slot name="header"> {{$quiz->title}} Sonucu </x-slot> 
    <div class="card"  >
        <div class="card-body">
        <h3 align="right">Puan: <strong>{{$quiz->my_result->point}}</strong></h3>
        <div class="alert alert-warning">
        <i class="fa fa-square"></i> Senin Cevabın &nbsp;&nbsp;
         <i class="fa fa-check text-success"></i> Doğru Cevap&nbsp;&nbsp;
         <i class="fa fa-check text-danger"></i> Yanlış Cevap&nbsp; 
        </div>
                @foreach ($quiz->questions as $question )
                @if ($question->correct_answer==$question->my_answer->answer)
                <i class="fa fa-check text-success"></i> 
                @else 
                <i class="fa fa-times text-danger"></i>  
                @endif
                    <strong> * {{$loop->iteration}} </strong>{{$question->question}} 
                    @if ($question->image)
                        <img src="{{asset($question->image)}}" style="width:50%" class="img-responsive" >
                    @endif<br> 
                <small>Bu soruya <strong> % {{$question->true_percent}}</strong> oranında doğru cevap verildi. </small>
                    <div class="form-check mt-2">
                        @if('answer1'==$question->correct_answer)
                        <i class="fa fa-check text-success"></i> 
                        @elseif ('answer1'==$question->my_answer->answer)
                        <i class="fa fa-square"></i> 
                        @endif
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                                {{$question->answer1}}
                            </label> 
                    </div>
                     <div class="form-check">
                       @if('answer2'==$question->correct_answer)
                       <i class="fa fa-check text-success"></i>
                       @elseif ('answer2'==$question->my_answer->answer)
                        <i class="fa fa-square"></i>  
                       @endif
                            <label class="form-check-label" for="quiz{{$question->id}}2">
                                {{$question->answer2}}
                            </label>
                    </div>
                    <div class="form-check">
                        @if('answer3'==$question->correct_answer)
                        <i class="fa fa-check text-success"></i>
                        @elseif ('answer3'==$question->my_answer->answer)
                        <i class="fa fa-square"></i> 
                        @endif
                            <label class="form-check-label" for="quiz{{$question->id}}3">
                                {{$question->answer3}}
                            </label>
                    </div>
                    <div class="form-check">
                        @if('answer4'==$question->correct_answer)
                        <i class="fa fa-check text-success"></i>
                        @elseif ('answer4'==$question->my_answer->answer)
                        <i class="fa fa-square"></i> 
                        @endif
                            <label class="form-check-label" for="quiz{{$question->id}}4">
                                {{$question->answer4}}
                            </label>
                    </div> 
                    
                @endforeach
        </div>
    </div>
</x-app-layout>
 