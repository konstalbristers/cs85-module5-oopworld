Prompt: 

Write a PHP method for a WorkoutLog class that estimates total weekly calories burned if the user does the same workout 5 times a week.

Raw AI generated code:   
public function estimateWeeklyCalories() {  
  	  return $this-\>caloriesBurned \* 5;  
}

What works: 

the method is correct and efficient. it multiplies calories burned by 5 with no extra overhead

Problem: 

it hardcodes the number 5 so it can’t adapt if the user does a different number of workouts per week

Improvement: 

i added a parameter to make it flexible:

public function estimateWeeklyCalories($sessionsPerWeek \= 5\) {

    return $this-\>caloriesBurned \* $sessionsPerWeek;

}