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
}
?>
