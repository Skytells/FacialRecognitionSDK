# Facial Recognition SDK
Skytells APIs for AI ( Facial Recognition Package ) for Skytells Framework

## Overview 
This SDK for recognizing Faces via Skytells Cloud AI APIs, developed for Skytells Framework

## Requirements 
 - Skytells Framework (Latest Version) 
 - Skytells API Key - <a href="https://developers.skytells.net/OAuth/">Get Started!</a>
 - Apache Server

## Installation
To install this package directly from Skytells Framework CLI or Bash

```sh
$ php skytells install --pkg=https://github.com/Skytells/FacialRecognitionSDK/raw/master/facial-recognition.pkg
```

Or, if you perfer to Clone it.
You can download one of our releases or clones, and put all files directly on ```Application``` folder on Skytells Framework.

## Understanding Package 

After Installing the Package on your Skytells Framework, You'll see the following files on your ```Resources``` Folder.

```
[] Controllers
   -- FacialRecognition.php
   
[] Views
  [] assets
    [] ai
      [] js
       -- functions.js
     -- style.css 
  -- facialRecognition.ui.php 
```

These are the main ```Resources``` files for the package. 


## Usage
Now Goto the ```assets/js/functions.js``` file, and put your API Key and you're ready to go!

Now Navigate your browser to the main viewer associated with the controller and the package system is now able to detect your face.

#### Important 
You'll need to train each face before recognizing.
See : <a href="https://developers.skytells.net/ai/facerecognition/#train-an-image">Training Faces</a>



