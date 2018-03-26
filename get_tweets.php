<?php
	
	require_once('TwitterAPIExchange.php');

	$settings = array(
    'oauth_access_token' => "",
    'oauth_access_token_secret' => "",
    'consumer_key' => "",
    'consumer_secret' => ""
);

	$url = 'https://api.twitter.com/1.1/search/tweets.json';
	$getfield = '?q=#Cardio+OR+#Cycling+OR+#Elliptical+OR+#FitFam+OR+#FitLife+OR+#Fitness+OR+#FitnessAddict+OR+#GetOutside+OR+#GetStrong+OR+#GirlsWhoLift+OR+#GymLife+OR+#GymTime+OR+#NoPainNoGain+OR+#PersonalTrainer+OR+#Sweat+OR+#Treadmill+OR+#Weights+OR+#WeightTraining+OR+#Workout&geocode=49.6935,-112.8418,122km&until=2018-03-25&count=110';
//    $getfield = '?q=#Cardio+OR+#Cycling+OR+#Elliptical+OR+#FitFam+OR+#FitLife+OR+#Fitness+OR+#FitnessAddict+OR+#GetOutside+OR+#GetStrong+OR+#GirlsWhoLift+OR+#GymLife+OR+#GymTime+OR+#NoPainNoGain+OR+#PersonalTrainer+OR+#Sweat+OR+#Treadmill+OR+#Weights+OR+#WeightTraining+OR+#Workout&geocode=51.0486,-114.0708,825.3km&until=2018-03-25&count=110';
//    $getfield = '?q=#Cardio+OR+#Cycling+OR+#Elliptical+OR+#FitFam+OR+#FitLife+OR+#Fitness+OR+#FitnessAddict+OR+#GetOutside+OR+#GetStrong+OR+#GirlsWhoLift+OR+#GymLife+OR+#GymTime+OR+#NoPainNoGain+OR+#PersonalTrainer+OR+#Sweat+OR+#Treadmill+OR+#Weights+OR+#WeightTraining+OR+#Workout&geocode=53.5444,-113.4909,684.4km&until=2018-03-25&count=110';
    $requestMethod = 'GET';

	$twitter = new TwitterAPIExchange($settings);
	echo $twitter->setGetfield($getfield)
    	->buildOauth($url, $requestMethod)
    	->performRequest();

?>