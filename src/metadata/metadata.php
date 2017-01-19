<?php 
return array (
  'package' => 'HyperTrack',
  'tagline' => 'Location traking as a service',
  'description' => 'HyperTrack lets you build location features, without worrying about infrastructure.',
  'image' => 'https://logo.clearbit.com/hypertrack.io?s=128',
  'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-HyperTrack-package',
  'keywords' => 
  array (
    0 => 'API',
    1 => 'traking',
    2 => 'HyperTrack',
  ),
  'accounts' => 
  array (
    'domain' => 'hypertrack.io',
    'credentials' => 
    array (
      0 => 'apiKey',
    ),
  ),
  'blocks' => 
  array (
    0 => 
    array (
      'name' => 'createDriver',
      'description' => 'Create and return a Driver object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'vehicleType',
          'type' => 'String',
          'info' => 'The default vehicle type of the driver. Must be one of \'walking, bicycle, motorcycle, car, 3-wheeler, van, flight, train, ship\'.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'name',
          'type' => 'String',
          'info' => 'Name of the driver.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'phone',
          'type' => 'String',
          'info' => 'E164 formatted phone number of the driver.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'photo',
          'type' => 'File',
          'info' => 'A photo file of the driver.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'lookupId',
          'type' => 'String',
          'info' => 'A unique id that you can add to the driver to search.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'fleetId',
          'type' => 'String',
          'info' => 'The identifier of the fleet to which the driver belongs.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    1 => 
    array (
      'name' => 'getSingleDriver',
      'description' => 'Retrieves a driver object with the id.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'Valid driver identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    2 => 
    array (
      'name' => 'updateDriver',
      'description' => 'Edit an existing driver object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'Valid driver identifier.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'vehicleType',
          'type' => 'String',
          'info' => 'The default vehicle type of the driver. Must be one of \'walking, bicycle, motorcycle, car, 3-wheeler, van, flight, train, ship\'.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'name',
          'type' => 'String',
          'info' => 'Name of the driver.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'phone',
          'type' => 'String',
          'info' => 'E164 formatted phone number of the driver.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'photo',
          'type' => 'File',
          'info' => 'A photo file of the driver.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'lookupId',
          'type' => 'String',
          'info' => 'A unique id that you can add to the driver to search.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'fleetId',
          'type' => 'String',
          'info' => 'The identifier of the fleet to which the driver belongs.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    3 => 
    array (
      'name' => 'deleteDriver',
      'description' => 'Delete an existing driver object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'Valid driver identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    4 => 
    array (
      'name' => 'getDrivers',
      'description' => 'List all driver objects. The list can be filtered using the following parameters.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'type' => 'Number',
          'info' => 'Maximum number of objects to return, default is 50.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'name',
          'type' => 'String',
          'info' => 'Filter drivers with names that contain this string.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'id',
          'type' => 'String',
          'info' => 'Filter drivers with a comma separated list of ids.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'fleetId',
          'type' => 'String',
          'info' => 'Filter driver objects by fleet.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'bbox',
          'type' => 'String',
          'info' => 'Filter driver objects by bounding box, specified as max_lng, max_lat, min_lng, min_lat.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'minDate',
          'type' => 'String',
          'info' => 'Filter objects by minimum created at date.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'maxDate',
          'type' => 'String',
          'info' => 'Filter objects by maximum created at date.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    5 => 
    array (
      'name' => 'getDriverOverview',
      'description' => 'Retrieves the overview of an existing driver\'s performance. Supply the unique identifier that was returned on driver creation.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'Valid driver identifier.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'minDate',
          'type' => 'String',
          'info' => 'Minimum date as ISO datetime string to get statistics for a driver.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'maxDate',
          'type' => 'String',
          'info' => 'Maximum date as ISO datetime string to get statistics for a driver.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    6 => 
    array (
      'name' => 'getDriversLocations',
      'description' => 'Returns a minimal list of your drivers with location to display on a map.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'fleetId',
          'type' => 'String',
          'info' => 'Filter only drivers of a particular fleet.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'pageSize',
          'type' => 'Number',
          'info' => 'The number of entries to return in a page (maximum of 200).',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'minDate',
          'type' => 'String',
          'info' => 'Minimum created date as ISO datetime string to filter drivers.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'maxDate',
          'type' => 'String',
          'info' => 'Maximum created date as ISO datetime string to filter drivers.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    7 => 
    array (
      'name' => 'assignTaskToDriver',
      'description' => 'This API will assign a Task to a Driver. We recommend using this after you have created tasks and want to start tracking them. If driver is on a Trip when the call is made, we add these task to the currently running Trip, else we create a new Trip and start tracking it for you. When all tasks are marked completed, we end the Trip and stop tracking.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'Valid driver identifier',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'taskId',
          'type' => 'String',
          'info' => 'Task id to be assigned to the driver.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    8 => 
    array (
      'name' => 'endTripForDriver',
      'description' => 'This API will end the live trip for a Driver.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'Valid driver identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    9 => 
    array (
      'name' => 'endShiftForDriver',
      'description' => 'This API will end the live shift for a Driver.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'Valid driver identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    10 => 
    array (
      'name' => 'createTrip',
      'description' => 'Creates a new trip object. By default, it also starts the trip.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'The id of the driver who will be on trip. If not specified, a new driver will be created for the purpose of the trip.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'startLocation',
          'type' => 'String',
          'info' => 'The start location of the trip.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'tasks',
          'type' => 'Array',
          'info' => 'The array of task ids to be performed on the trip, in format ["b2249ba8-e88c-455e-b02f-672677828ddc"].',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'vehicleType',
          'type' => 'String',
          'info' => 'The vehicle type to be used in the trip. If not specified, this defaults to vehicle type of driver. Possible types are walking, bicycle, motorcycle, car, 3-wheeler, van.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'hasOrderedTasks',
          'type' => 'Boolean',
          'info' => 'Set true to indicate the tasks have a pre-defined sequence as specified in tasks. Default is false.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'isAutoEnded',
          'type' => 'Boolean',
          'info' => 'Set false if the trip should not end after the last task is completed. Default is true, and the trip ends after the last task is completed.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    11 => 
    array (
      'name' => 'endTrip',
      'description' => 'Ends a live trip by trip id.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'tripId',
          'type' => 'String',
          'info' => 'Valid trip identifier.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'endLocation',
          'type' => 'String',
          'info' => 'Location where the trip ends.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'endTime',
          'type' => 'String',
          'info' => 'Time at which the trip ends, defaults to current time.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    12 => 
    array (
      'name' => 'getSingleTrip',
      'description' => 'Retrieves a trip object with the id.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'tripId',
          'type' => 'String',
          'info' => 'Valid trip identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    13 => 
    array (
      'name' => 'deleteTrip',
      'description' => 'Delete an existing trip object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'tripId',
          'type' => 'String',
          'info' => 'Valid trip identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    14 => 
    array (
      'name' => 'getTrips',
      'description' => 'List all trip objects. The list can be filtered using the following parameters.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'type' => 'Number',
          'info' => 'Maximum number of objects to return, default is 50.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'Filter trips for a particular driver id.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'id',
          'type' => 'String',
          'info' => 'Filter trips with a comma separated list of ids.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'status',
          'type' => 'String',
          'info' => 'Filter trips for a particular status, can be one of live, ended, suspended.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'minDate',
          'type' => 'String',
          'info' => 'Filter objects by minimum created at date.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'maxDate',
          'type' => 'String',
          'info' => 'Filter objects by maximum created at date.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    15 => 
    array (
      'name' => 'addTaskToTrip',
      'description' => 'This API lets you add Tasks to a live Trip. Only tasks that have not been completed can be added to a Trip.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'tripId',
          'type' => 'String',
          'info' => 'Valid trip identifier.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'taskId',
          'type' => 'String',
          'info' => 'The id of the task to be added.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    16 => 
    array (
      'name' => 'removeTaskFromTrip',
      'description' => 'This API lets you remove Tasks to a live Trip. Only tasks that are on the Trip and have not been completed can be removed.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'tripId',
          'type' => 'String',
          'info' => 'Valid trip identifier.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'taskId',
          'type' => 'String',
          'info' => 'The id of the task to be removed.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    17 => 
    array (
      'name' => 'changeTripTasksSequence',
      'description' => 'This API lets you reorder Tasks of a live Trip. This can only be done for Trips that have has_ordered_tasks as true.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'tripId',
          'type' => 'String',
          'info' => 'Valid trip identifier.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'taskOrder',
          'type' => 'Array',
          'info' => 'Array of task ids in the new sequence. Must have all ids of tasks on the trip, in format ["3a36b6df-a7e7-40d0-86b7-b5aae1ce3a2b", "77b9a3fa-a3ab-4840-aadb-cd33442ca45b"]',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    18 => 
    array (
      'name' => 'createTask',
      'description' => 'Creates a new task object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'destinationId',
          'type' => 'String',
          'info' => 'The id of the destination where the task will be performed.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'action',
          'type' => 'String',
          'info' => 'The action of the task, possible values are pickup, delivery, visit or task. Defaults to task.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'orderId',
          'type' => 'String',
          'info' => 'An id that you can specify based on your internal ids.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'committedEta',
          'type' => 'String',
          'info' => 'The eta commitment made to the customer to measure on-time performance, in format "2000-01-01T12:00:00.00Z".',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    19 => 
    array (
      'name' => 'createTaskWithNewDestination',
      'description' => 'Creates a new task object with creating new destination.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'customerId',
          'type' => 'String',
          'info' => 'The id of the customer to which this destination belongs.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'address',
          'type' => 'String',
          'info' => 'Street address of the destination.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'landmark',
          'type' => 'String',
          'info' => 'Landmark near destination.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'zipCode',
          'type' => 'String',
          'info' => 'Zip or postal code of the destination.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'city',
          'type' => 'String',
          'info' => 'City of the destination.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'state',
          'type' => 'String',
          'info' => 'State of the destination.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'country',
          'type' => 'String',
          'info' => 'Country of the destination.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'locationLatitude',
          'type' => 'String',
          'info' => 'Location latitude of the destination.',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'locationLongitude',
          'type' => 'String',
          'info' => 'Location longitude of the destination.',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'action',
          'type' => 'String',
          'info' => 'The action of the task, possible values are pickup, delivery, visit or task. Defaults to task.',
          'required' => false,
        ),
        11 => 
        array (
          'name' => 'orderId',
          'type' => 'String',
          'info' => 'An id that you can specify based on your internal ids.',
          'required' => false,
        ),
        12 => 
        array (
          'name' => 'committedEta',
          'type' => 'String',
          'info' => 'The eta commitment made to the customer to measure on-time performance, in format "2000-01-01T12:00:00.00Z".',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    20 => 
    array (
      'name' => 'completeTask',
      'description' => 'Completes a Task.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'taskId',
          'type' => 'String',
          'info' => 'Valid task identifier.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'completionTime',
          'type' => 'String',
          'info' => 'Timestamp when task is completed, default to current time.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'completionLocation',
          'type' => 'String',
          'info' => 'Location at which task is completed.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    21 => 
    array (
      'name' => 'cancelTask',
      'description' => 'Cancels a Task. Canceled tasks cannot be restarted, removed or completed.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'taskId',
          'type' => 'String',
          'info' => 'Valid task identifier.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'cancelationTime',
          'type' => 'String',
          'info' => 'Timestamp when task is canceled, default to current time.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    22 => 
    array (
      'name' => 'getSingleTask',
      'description' => 'Retrieves a task object with the id.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'taskId',
          'type' => 'String',
          'info' => 'Valid task identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    23 => 
    array (
      'name' => 'updateDestinationLocation',
      'description' => 'Updates the location of the destination of the task.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'taskId',
          'type' => 'String',
          'info' => 'Valid task identifier.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'locationLatitude',
          'type' => 'String',
          'info' => 'Location latitude of the new destination.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'locationLongitude',
          'type' => 'String',
          'info' => 'Location longitude of the new destination.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    24 => 
    array (
      'name' => 'getTasks',
      'description' => 'List all tasks objects. The list can be filtered using the following parameters.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'type' => 'Number',
          'info' => 'Maximum number of objects to return, default is 50.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'Filter tasks that are assigned to a driver.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'orderId',
          'type' => 'String',
          'info' => 'Filter tasks by order id.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'minDate',
          'type' => 'String',
          'info' => 'Filter objects by minimum created at date.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'maxDate',
          'type' => 'String',
          'info' => 'Filter objects by maximum created at date.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    25 => 
    array (
      'name' => 'deleteTask',
      'description' => 'Delete an existing task object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'taskId',
          'type' => 'String',
          'info' => 'Valid task identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    26 => 
    array (
      'name' => 'createShift',
      'description' => 'Creates a new shift object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'The id of the driver on shift.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'startLocation',
          'type' => 'String',
          'info' => 'Start location of the shift.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'startedAt',
          'type' => 'String',
          'info' => 'Start time of the shift, default is current time.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    27 => 
    array (
      'name' => 'getSingleShift',
      'description' => 'Retrieves a shift object with the id.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'shiftId',
          'type' => 'String',
          'info' => 'Valid shift identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    28 => 
    array (
      'name' => 'endShift',
      'description' => 'Ends a shift object with the id.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'shiftId',
          'type' => 'String',
          'info' => 'Valid shift identifier',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    29 => 
    array (
      'name' => 'deleteShift',
      'description' => 'Delete an existing shift object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'shiftId',
          'type' => 'String',
          'info' => 'Valid shift identifier',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    30 => 
    array (
      'name' => 'getShifts',
      'description' => 'List all shift objects. The list can be filtered using the following parameters.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'type' => 'Number',
          'info' => 'Maximum number of objects to return, default is 50.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'id',
          'type' => 'String',
          'info' => 'Filter shifts with a comma separated list of ids.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'Filter shift objects for a particular driver.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'isActive',
          'type' => 'Boolean',
          'info' => 'Filter only active or inactive shifts.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'minDate',
          'type' => 'String',
          'info' => 'Filter objects by minimum created at date.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'maxDate',
          'type' => 'String',
          'info' => 'Filter objects by maximum created at date.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    31 => 
    array (
      'name' => 'createDestination',
      'description' => 'Creates a new destination object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'customerId',
          'type' => 'String',
          'info' => 'The id of the customer to which this destination belongs.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'address',
          'type' => 'String',
          'info' => 'Street address of the destination.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'landmark',
          'type' => 'String',
          'info' => 'Landmark near destination.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'zipCode',
          'type' => 'String',
          'info' => 'Zip or postal code of the destination.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'city',
          'type' => 'String',
          'info' => 'City of the destination.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'state',
          'type' => 'String',
          'info' => 'State of the destination.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'country',
          'type' => 'String',
          'info' => 'Country of the destination.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'locationLatitude',
          'type' => 'String',
          'info' => 'Location latitude of the destination.',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'locationLongitude',
          'type' => 'String',
          'info' => 'Location longitude of the destination.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    32 => 
    array (
      'name' => 'getSingleDestination',
      'description' => 'Retrieves the details of an existing destination.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'destinationId',
          'type' => 'String',
          'info' => 'Valid destination identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    33 => 
    array (
      'name' => 'updateDestination',
      'description' => 'Edit an existing destination object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'destinationId',
          'type' => 'String',
          'info' => 'Valid destination identifier.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'customerId',
          'type' => 'String',
          'info' => 'The id of the customer to which this destination belongs.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'address',
          'type' => 'String',
          'info' => 'Street address of the destination.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'landmark',
          'type' => 'String',
          'info' => 'Landmark near destination.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'zipCode',
          'type' => 'String',
          'info' => 'Zip or postal code of the destination.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'city',
          'type' => 'String',
          'info' => 'City of the destination.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'state',
          'type' => 'String',
          'info' => 'State of the destination.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'country',
          'type' => 'String',
          'info' => 'Country of the destination.',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'locationLatitude',
          'type' => 'String',
          'info' => 'Location latitude of the destination.',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'locationLongitude',
          'type' => 'String',
          'info' => 'Location longitude of the destination.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    34 => 
    array (
      'name' => 'deleteDestination',
      'description' => 'Delete an existing destination object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'destinationId',
          'type' => 'String',
          'info' => 'Valid destination identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    35 => 
    array (
      'name' => 'getDestinations',
      'description' => 'Returns a list of your destinations. The destinations are returned sorted by updated date, with the most recently updated destinations appearing first.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'type' => 'Number',
          'info' => 'Maximum number of objects to return, default is 50.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'customerId',
          'type' => 'String',
          'info' => 'Filter destination objects by customer.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'minDate',
          'type' => 'String',
          'info' => 'Filter objects by minimum created at date.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'maxDate',
          'type' => 'String',
          'info' => 'Filter objects by maximum created at date.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    36 => 
    array (
      'name' => 'createCustomer',
      'description' => 'Creates a new customer object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'name',
          'type' => 'String',
          'info' => 'Name of the customer.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'phone',
          'type' => 'String',
          'info' => 'E164 formatted phone number of customer.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'email',
          'type' => 'String',
          'info' => 'Email of the customer.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    37 => 
    array (
      'name' => 'getSingleCustomer',
      'description' => 'Retrieves a customer object with the id.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'customerId',
          'type' => 'String',
          'info' => 'Valid customer identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    38 => 
    array (
      'name' => 'updateCustomer',
      'description' => 'Edit an existing customer object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'customerId',
          'type' => 'String',
          'info' => 'Valid customer identifier.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'name',
          'type' => 'String',
          'info' => 'Name of the customer.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'phone',
          'type' => 'String',
          'info' => 'E164 formatted phone number of customer.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'email',
          'type' => 'String',
          'info' => 'Email of the customer.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    39 => 
    array (
      'name' => 'deleteCustomer',
      'description' => 'Delete an existing customer object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'customerId',
          'type' => 'String',
          'info' => 'Valid customer identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    40 => 
    array (
      'name' => 'getCustomers',
      'description' => 'List all customer objects. The list can be filtered using the following parameters.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'type' => 'Number',
          'info' => 'Maximum number of objects to return, default is 50.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'name',
          'type' => 'String',
          'info' => 'Filter customers with names that contain this string.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'id',
          'type' => 'String',
          'info' => 'Filter customers with a comma separated list of ids.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'neighborhoodId',
          'type' => 'String',
          'info' => 'Filter customer objects by neighborhood.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'minDate',
          'type' => 'String',
          'info' => 'Filter objects by minimum created at date.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'maxDate',
          'type' => 'String',
          'info' => 'Filter objects by maximum created at date.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    41 => 
    array (
      'name' => 'createFleet',
      'description' => 'Creates a new fleet object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'name',
          'type' => 'String',
          'info' => 'Name of the fleet.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    42 => 
    array (
      'name' => 'getSingleFleet',
      'description' => 'Retrieves a fleet object with the id.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'fleetId',
          'type' => 'String',
          'info' => 'Valid fleet identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    43 => 
    array (
      'name' => 'updateFleet',
      'description' => 'Edit an existing fleet object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'fleetId',
          'type' => 'String',
          'info' => 'Valid fleet identifier.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'name',
          'type' => 'String',
          'info' => 'Name of the fleet.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    44 => 
    array (
      'name' => 'deleteFleet',
      'description' => 'Delete an existing fleet object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'fleetId',
          'type' => 'String',
          'info' => 'Valid fleet identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    45 => 
    array (
      'name' => 'getFleets',
      'description' => 'List all fleet objects. The list can be filtered using the following parameters.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'type' => 'Number',
          'info' => 'Maximum number of objects to return, default is 50.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'name',
          'type' => 'String',
          'info' => 'Filter fleets with names that contain this string.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'minDate',
          'type' => 'String',
          'info' => 'Filter objects by minimum created at date.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'maxDate',
          'type' => 'String',
          'info' => 'Filter objects by maximum created at date.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    46 => 
    array (
      'name' => 'getSingleNeighborhood',
      'description' => 'Retrieves a neighborhood object with the id.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'neighborhoodId',
          'type' => 'String',
          'info' => 'Valid neighborhood identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    47 => 
    array (
      'name' => 'getNeighborhoods',
      'description' => 'List all neighborhood objects.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    48 => 
    array (
      'name' => 'getSingleEvent',
      'description' => 'This API retrieves the details of an event. Supply the unique identifier of the event, which you might have received in a webhook. All events share a common structure, detailed below. The only property that will differ is the data property. In each case, the data dictionary will have an attribute called object and its value will be the same as retrieving the same object directly from the API. For example, a order.created event will have the same information as retrieving the relevant order would.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'eventId',
          'type' => 'String',
          'info' => 'Valid event identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    49 => 
    array (
      'name' => 'getEvents',
      'description' => 'Retrieve list of all events.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    50 => 
    array (
      'name' => 'createGPSLog',
      'description' => 'Creates a new gpslog object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'The driver id to which this location belongs.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'locationLatitude',
          'type' => 'String',
          'info' => 'The location recorded latitude.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'locationLongitude',
          'type' => 'String',
          'info' => 'The location recorded longitude.',
          'required' => true,
        ),
        4 => 
        array (
          'name' => 'recordedAt',
          'type' => 'String',
          'info' => 'The timestamp at which the location was recorded.',
          'required' => true,
        ),
        5 => 
        array (
          'name' => 'locationAccuracy',
          'type' => 'String',
          'info' => 'The location accuracy of the location in meters.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'speed',
          'type' => 'String',
          'info' => 'The speed in meters/speed.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'bearing',
          'type' => 'String',
          'info' => 'The bearing in degrees from the N-S axis.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'altitude',
          'type' => 'String',
          'info' => 'The altitude above sea level in meters.',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'activities',
          'type' => 'String',
          'info' => 'List of activities recorded with the location. Possible activities are stationary, walking, running, automotive, cycling or unknown.',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'activityConfidence',
          'type' => 'Number',
          'info' => 'Confidence level of the recorded activities, between 0 to 100.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    51 => 
    array (
      'name' => 'createBulkGPSLogs',
      'description' => 'Create multiple GPS logs, by sending a list of GPS Log objects.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'gpsLogObjectsList',
          'type' => 'Array',
          'info' => 'Array of JSON objects, list of GPS Log objects.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    52 => 
    array (
      'name' => 'getSingleGPSLog',
      'description' => 'Retrieves a GPS Log object with the id.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'gpsLogObjectId',
          'type' => 'String',
          'info' => 'Valid GPS log object identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    53 => 
    array (
      'name' => 'getFilteredGPSLogs',
      'description' => 'GPS Log data from the device is filtered to remove noise and improve accuracy. This filtered list can be retrieve with this API. You can also specify parameters to query GPS Log objects of a particular driver or time period.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'type' => 'Number',
          'info' => 'Maximum number of objects to return, default is 50.',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'driverId',
          'type' => 'String',
          'info' => 'Filter GPS Log objects by driver.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'minRecordedAt',
          'type' => 'String',
          'info' => 'Filter objects by minimum device timestamp.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'maxRecordedAt',
          'type' => 'String',
          'info' => 'Filter objects by maximum device timestamp.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'minDate',
          'type' => 'String',
          'info' => 'Filter objects by minimum created at date.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'maxDate',
          'type' => 'String',
          'info' => 'Filter objects by maximum created at date.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    54 => 
    array (
      'name' => 'deleteGPSLog',
      'description' => 'Delete an existing GPS Log object.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'apiKey',
          'type' => 'credentials',
          'info' => 'API key.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'gpsLogObjectId',
          'type' => 'String',
          'info' => 'Valid GPS Log object identifier.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
  ),
  'custom' => 
  array (
    'createDriver' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'vehicleType' => 'vehicle_type',
        'name' => 'name',
        'phone' => 'phone',
        'photo' => 'photo',
        'lookupId' => 'lookup_id',
        'fleetId' => 'fleet_id',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/',
      'method' => 'POST',
    ),
    'getSingleDriver' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'driverId' => 'driverId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/',
      'method' => 'GET',
    ),
    'updateDriver' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'driverId' => 'driverId',
        'vehicleType' => 'vehicle_type',
        'name' => 'name',
        'phone' => 'phone',
        'photo' => 'photo',
        'lookupId' => 'lookup_id',
        'fleetId' => 'fleet_id',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/',
      'method' => 'PATCH',
    ),
    'deleteDriver' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'driverId' => 'driverId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/',
      'method' => 'DELETE',
    ),
    'getDrivers' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'pageSize' => 'page_size',
        'name' => 'name',
        'id' => 'id',
        'fleetId' => 'fleet_id',
        'bbox' => 'bbox',
        'minDate' => 'min_date',
        'maxDate' => 'max_date',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/',
      'method' => 'GET',
    ),
    'getDriverOverview' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'driverId' => 'driverId',
        'minDate' => 'min_date',
        'maxDate' => 'max_date',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/overview/',
      'method' => 'GET',
    ),
    'getDriversLocations' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'fleetId' => 'fleet_id',
        'pageSize' => 'page_size',
        'minDate' => 'min_date',
        'maxDate' => 'max_date',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/map_list/',
      'method' => 'GET',
    ),
    'assignTaskToDriver' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'driverId' => 'driverId',
        'taskId' => 'task_ids',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/assign_tasks/',
      'method' => 'POST',
    ),
    'endTripForDriver' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'driverId' => 'driverId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/end_trip/',
      'method' => 'POST',
    ),
    'endShiftForDriver' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'driverId' => 'driverId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/end_trip/',
      'method' => 'POST',
    ),
    'createTrip' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'driverId' => 'driver_id',
        'startLocation' => 'start_location',
        'tasks' => 'tasks',
        'vehicleType' => 'vehicle_type',
        'hasOrderedTasks' => 'has_ordered_tasks',
        'isAutoEnded' => 'is_auto_ended',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/',
      'method' => 'POST',
    ),
    'endTrip' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'tripId' => 'tripId',
        'endLocation' => 'end_location',
        'endTime' => 'end_time',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/{{tripId}}/end/',
      'method' => 'POST',
    ),
    'getSingleTrip' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'tripId' => 'tripId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/{{tripId}}/',
      'method' => 'GET',
    ),
    'deleteTrip' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'tripId' => 'tripId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/{{tripId}}/',
      'method' => 'DELETE',
    ),
    'getTrips' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'pageSize' => 'page_size',
        'driverId' => 'driver_id',
        'id' => 'id',
        'status' => 'status',
        'minDate' => 'min_date',
        'maxDate' => 'max_date',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/',
      'method' => 'GET',
    ),
    'addTaskToTrip' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'tripId' => 'tripId',
        'taskId' => 'task_id',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/{{tripId}}/add_task/',
      'method' => 'POST',
    ),
    'removeTaskFromTrip' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'tripId' => 'tripId',
        'taskId' => 'task_id',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/{{tripId}}/remove_task/',
      'method' => 'POST',
    ),
    'changeTripTasksSequence' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'tripId' => 'tripId',
        'taskOrder' => 'task_order',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/{{tripId}}/change_task_order/',
      'method' => 'POST',
    ),
    'createTask' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'destinationId' => 'destination_id',
        'action' => 'action',
        'orderId' => 'order_id',
        'committedEta' => 'committed_eta',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/',
      'method' => 'POST',
    ),
    'createTaskWithNewDestination' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'customerId' => 'customer_id',
        'address' => 'address',
        'landmark' => 'landmark',
        'zipCode' => 'zip_code',
        'city' => 'city',
        'state' => 'state',
        'country' => 'country',
        'locationLatitude' => 'locationLatitude',
        'locationLongitude' => 'locationLongitude',
        'action' => 'action',
        'orderId' => 'order_id',
        'committedEta' => 'committed_eta',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/',
      'method' => 'POST',
      'custom' => true,
    ),
    'completeTask' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'taskId' => 'taskId',
        'completionTime' => 'completion_time',
        'completionLocation' => 'completion_location',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/{{taskId}}/completed/',
      'method' => 'POST',
    ),
    'cancelTask' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'taskId' => 'taskId',
        'cancelationTime' => 'cancelation_time',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/{{taskId}}/canceled/',
      'method' => 'POST',
    ),
    'getSingleTask' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'taskId' => 'taskId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/{{taskId}}/',
      'method' => 'GET',
    ),
    'updateDestinationLocation' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'taskId' => 'taskId',
        'locationLatitude' => 'locationLatitude',
        'locationLongitude' => 'locationLongitude',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/{{taskId}}/update_destination/',
      'method' => 'POST',
      'custom' => true,
    ),
    'getTasks' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'pageSize' => 'page_size',
        'driverId' => 'driver_id',
        'orderId' => 'order_id',
        'minDate' => 'min_date',
        'maxDate' => 'max_date',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/',
      'method' => 'GET',
    ),
    'deleteTask' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'taskId' => 'taskId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/{{taskId}}/',
      'method' => 'DELETE',
    ),
    'createShift' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'driverId' => 'driver_id',
        'startLocation' => 'start_location',
        'startedAt' => 'started_at',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/shifts/',
      'method' => 'POST',
    ),
    'getSingleShift' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'shiftId' => 'shiftId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/shifts/{{shiftId}}/',
      'method' => 'GET',
    ),
    'endShift' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'shiftId' => 'shiftId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/shifts/{{shiftId}}/end/',
      'method' => 'POST',
    ),
    'deleteShift' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'shiftId' => 'shiftId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/shift/{{shiftId}}/',
      'method' => 'DELETE',
    ),
    'getShifts' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'pageSize' => 'page_size',
        'id' => 'id',
        'driverId' => 'driver_id',
        'isActive' => 'is_active',
        'minDate' => 'min_date',
        'maxDate' => 'max_date',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/shifts/',
      'method' => 'GET',
    ),
    'createDestination' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'customerId' => 'customer_id',
        'address' => 'address',
        'landmark' => 'landmark',
        'zipCode' => 'zip_code',
        'city' => 'city',
        'state' => 'state',
        'country' => 'country',
        'locationLatitude' => 'locationLatitude',
        'locationLongitude' => 'locationLongitude',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/destinations/',
      'method' => 'POST',
      'custom' => true,
    ),
    'getSingleDestination' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'destinationId' => 'destinationId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/destinations/{{destinationId}}/',
      'method' => 'GET',
    ),
    'updateDestination' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'destinationId' => 'destinationId',
        'customerId' => 'customer_id',
        'address' => 'address',
        'landmark' => 'landmark',
        'zipCode' => 'zip_code',
        'city' => 'city',
        'state' => 'state',
        'country' => 'country',
        'locationLatitude' => 'locationLatitude',
        'locationLongitude' => 'locationLongitude',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/destinations/{{destinationId}}/',
      'method' => 'PATCH',
      'custom' => true,
    ),
    'deleteDestination' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'destinationId' => 'destinationId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/destinations/{{destinationId}}/',
      'method' => 'DELETE',
    ),
    'getDestinations' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'pageSize' => 'page_size',
        'customerId' => 'customer_id',
        'minDate' => 'min_date',
        'maxDate' => 'max_date',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/destinations/',
      'method' => 'GET',
    ),
    'createCustomer' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'name' => 'name',
        'phone' => 'phone',
        'email' => 'email',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/customers/',
      'method' => 'POST',
    ),
    'getSingleCustomer' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'customerId' => 'customerId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/customers/{{customerId}}/',
      'method' => 'GET',
    ),
    'updateCustomer' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'customerId' => 'customerId',
        'name' => 'name',
        'phone' => 'phone',
        'email' => 'email',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/customers/{{customerId}}/',
      'method' => 'PATCH',
    ),
    'deleteCustomer' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'customerId' => 'customerId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/customers/{{customerId}}/',
      'method' => 'DELETE',
    ),
    'getCustomers' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'pageSize' => 'page_size',
        'name' => 'name',
        'id' => 'id',
        'neighborhoodId' => 'neighborhood_id',
        'minDate' => 'min_date',
        'maxDate' => 'max_date',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/customers/',
      'method' => 'GET',
    ),
    'createFleet' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'name' => 'name',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/fleets/',
      'method' => 'POST',
    ),
    'getSingleFleet' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'fleetId' => 'fleetId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/fleets/{{fleetId}}/',
      'method' => 'GET',
    ),
    'updateFleet' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'fleetId' => 'fleetId',
        'name' => 'name',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/fleets/{{fleetId}}/',
      'method' => 'PATCH',
    ),
    'deleteFleet' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'fleetId' => 'fleetId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/fleets/{{fleetId}}/',
      'method' => 'DELETE',
    ),
    'getFleets' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'pageSize' => 'page_size',
        'name' => 'name',
        'minDate' => 'min_date',
        'maxDate' => 'max_date',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/fleets/',
      'method' => 'GET',
    ),
    'getSingleNeighborhood' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'neighborhoodId' => 'neighborhoodId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/neighborhoods/{{neighborhoodId}}/',
      'method' => 'GET',
    ),
    'getNeighborhoods' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/neighborhoods/',
      'method' => 'GET',
    ),
    'getSingleEvent' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'eventId' => 'eventId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/events/{{eventId}}/',
      'method' => 'GET',
    ),
    'getEvents' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/events/',
      'method' => 'GET',
    ),
    'createGPSLog' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'driverId' => 'driver_id',
        'locationLatitude' => 'locationLatitude',
        'locationLongitude' => 'locationLongitude',
        'recordedAt' => 'recorded_at',
        'locationAccuracy' => 'location_accuracy',
        'speed' => 'speed',
        'bearing' => 'bearing',
        'altitude' => 'altitude',
        'activities' => 'activities',
        'activityConfidence' => 'activity_confidence',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/gps/',
      'method' => 'POST',
      'custom' => true,
    ),
    'createBulkGPSLogs' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'gpsLogObjectsList' => 'gpsLogObjectsList',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/gps/bulk/',
      'method' => 'POST',
      'custom' => true,
    ),
    'getSingleGPSLog' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'gpsLogObjectId' => 'gpsLogObjectId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/gps/{{gpsLogObjectId}}/',
      'method' => 'GET',
    ),
    'getFilteredGPSLogs' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'pageSize' => 'page_size',
        'driverId' => 'driver_id',
        'minRecordedAt' => 'min_recorded_at',
        'maxRecordedAt' => 'max_recorded_at',
        'minDate' => 'min_date',
        'maxDate' => 'max_date',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/gps/',
      'method' => 'GET',
    ),
    'deleteGPSLog' => 
    array (
      'dictionary' => 
      array (
        'apiKey' => 'apiKey',
        'gpsLogObjectId' => 'gpsLogObjectId',
      ),
      'vendorUrl' => 'https://app.hypertrack.io/api/v1/gps/{{gpsLogObjectId}}/',
      'method' => 'DELETE',
    ),
  ),
);