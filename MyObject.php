<?php
// WorkoutLog.php
// Assignment: cs85-module5b-oopworld

class WorkoutLog {
    public $name;
    public $workoutType;
    public $duration;
    public $caloriesBurned;
    public $notes;

    public function __construct($name, $workoutType, $duration, $caloriesBurned, $notes) {
        // i expect this to initialize all properties when object is created
        $this->name = $name;
        $this->workoutType = $workoutType;
        $this->duration = $duration;
        $this->caloriesBurned = $caloriesBurned;
        $this->notes = $notes;
    }

    // i expect this to return a formatted summary string
    public function getSummary() {
        return "Workout Log for {$this->name}: {$this->workoutType} for {$this->duration} min, "
             . "burned {$this->caloriesBurned} calories. Notes: {$this->notes}";
    }

    // i expect this to return calories divided by duration
    public function getCaloriesPerMinute() {
        if ($this->duration > 0) {
            return $this->caloriesBurned / $this->duration;
        }
        return 0;
    }

    // i expect this to return "Intense workout!" if duration > 60 or calories > 500
    public function isIntense() {
        if ($this->duration > 60 || $this->caloriesBurned > 500) {
            return "Intense workout!";
        }
        return "Moderate workout.";
    }
}
?>
