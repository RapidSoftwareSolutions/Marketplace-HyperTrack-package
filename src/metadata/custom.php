<?php
return array (
    'createDriver' => array (
        'dictionary' => array (
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
    'getSingleDriver' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'driverId' => 'driverId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/',
        'method' => 'GET',
    ),
    'updateDriver' => array(
        'dictionary' => array(
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
    'deleteDriver' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'driverId' => 'driverId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/',
        'method' => 'DELETE',
    ),
    'getDrivers' => array(
        'dictionary' => array(
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
    'getDriverOverview' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'driverId' => 'driverId',
            'minDate' => 'min_date',
            'maxDate' => 'max_date',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/overview/',
        'method' => 'GET',
    ),
    'getDriversLocations' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'fleetId' => 'fleet_id',
            'pageSize' => 'page_size',
            'minDate' => 'min_date',
            'maxDate' => 'max_date',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/map_list/',
        'method' => 'GET',
    ),
    'assignTaskToDriver' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'driverId' => 'driverId',
            'taskId' => 'task_ids',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/assign_tasks/',
        'method' => 'POST',
    ),
    'endTripForDriver' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'driverId' => 'driverId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/end_trip/',
        'method' => 'POST',
    ),
    'endShiftForDriver' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'driverId' => 'driverId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/drivers/{{driverId}}/end_trip/',
        'method' => 'POST',
    ),
    'createTrip' => array(
        'dictionary' => array(
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
    'endTrip' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'tripId' => 'tripId',
            'endLocation' => 'end_location',
            'endTime' => 'end_time',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/{{tripId}}/end/',
        'method' => 'POST',
    ),
    'getSingleTrip' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'tripId' => 'tripId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/{{tripId}}/',
        'method' => 'GET',
    ),
    'deleteTrip' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'tripId' => 'tripId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/{{tripId}}/',
        'method' => 'DELETE',
    ),
    'getTrips' => array(
        'dictionary' => array(
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
    'addTaskToTrip' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'tripId' => 'tripId',
            'taskId' => 'task_id',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/{{tripId}}/add_task/',
        'method' => 'POST',
    ),
    'removeTaskFromTrip' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'tripId' => 'tripId',
            'taskId' => 'task_id',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/{{tripId}}/remove_task/',
        'method' => 'POST',
    ),
    'changeTripTasksSequence' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'tripId' => 'tripId',
            'taskOrder' => 'task_order',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/trips/{{tripId}}/change_task_order/',
        'method' => 'POST',
    ),
    'createTask' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'destinationId' => 'destination_id',
            'action' => 'action',
            'orderId' => 'order_id',
            'committedEta' => 'committed_eta',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/',
        'method' => 'POST',
    ),
    'createTaskWithNewDestination' => array(
        'dictionary' => array(
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
    'completeTask' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'taskId' => 'taskId',
            'completionTime' => 'completion_time',
            'completionLocation' => 'completion_location',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/{{taskId}}/completed/',
        'method' => 'POST',
    ),
    'cancelTask' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'taskId' => 'taskId',
            'cancelationTime' => 'cancelation_time',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/{{taskId}}/canceled/',
        'method' => 'POST',
    ),
    'getSingleTask' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'taskId' => 'taskId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/{{taskId}}/',
        'method' => 'GET',
    ),
    'updateDestinationLocation' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'taskId' => 'taskId',
            'locationLatitude' => 'locationLatitude',
            'locationLongitude' => 'locationLongitude',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/{{taskId}}/update_destination/',
        'method' => 'POST',
        'custom' => true,
    ),
    'getTasks' => array(
        'dictionary' => array(
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
    'deleteTask' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'taskId' => 'taskId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/tasks/{{taskId}}/',
        'method' => 'DELETE',
    ),
    'createShift' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'driverId' => 'driver_id',
            'startLocation' => 'start_location',
            'startedAt' => 'started_at',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/shifts/',
        'method' => 'POST',
    ),
    'getSingleShift' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'shiftId' => 'shiftId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/shifts/{{shiftId}}/',
        'method' => 'GET',
    ),
    'endShift' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'shiftId' => 'shiftId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/shifts/{{shiftId}}/end/',
        'method' => 'POST',
    ),
    'deleteShift' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'shiftId' => 'shiftId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/shift/{{shiftId}}/',
        'method' => 'DELETE',
    ),
    'getShifts' => array(
        'dictionary' => array(
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
    'createDestination' => array(
        'dictionary' => array(
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
    'getSingleDestination' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'destinationId' => 'destinationId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/destinations/{{destinationId}}/',
        'method' => 'GET',
    ),
    'updateDestination' => array(
        'dictionary' => array(
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
    'deleteDestination' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'destinationId' => 'destinationId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/destinations/{{destinationId}}/',
        'method' => 'DELETE',
    ),
    'getDestinations' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'pageSize' => 'page_size',
            'customerId' => 'customer_id',
            'minDate' => 'min_date',
            'maxDate' => 'max_date',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/destinations/',
        'method' => 'GET',
    ),
    'createCustomer' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'name' => 'name',
            'phone' => 'phone',
            'email' => 'email',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/customers/',
        'method' => 'POST',
    ),
    'getSingleCustomer' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'customerId' => 'customerId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/customers/{{customerId}}/',
        'method' => 'GET',
    ),
    'updateCustomer' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'customerId' => 'customerId',
            'name' => 'name',
            'phone' => 'phone',
            'email' => 'email',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/customers/{{customerId}}/',
        'method' => 'PATCH',
    ),
    'deleteCustomer' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'customerId' => 'customerId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/customers/{{customerId}}/',
        'method' => 'DELETE',
    ),
    'getCustomers' => array(
        'dictionary' => array(
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
    'createFleet' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'name' => 'name',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/fleets/',
        'method' => 'POST',
    ),
    'getSingleFleet' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'fleetId' => 'fleetId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/fleets/{{fleetId}}/',
        'method' => 'GET',
    ),
    'updateFleet' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'fleetId' => 'fleetId',
            'name' => 'name',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/fleets/{{fleetId}}/',
        'method' => 'PATCH',
    ),
    'deleteFleet' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'fleetId' => 'fleetId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/fleets/{{fleetId}}/',
        'method' => 'DELETE',
    ),
    'getFleets' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'pageSize' => 'page_size',
            'name' => 'name',
            'minDate' => 'min_date',
            'maxDate' => 'max_date',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/fleets/',
        'method' => 'GET',
    ),
    'getSingleNeighborhood' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'neighborhoodId' => 'neighborhoodId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/neighborhoods/{{neighborhoodId}}/',
        'method' => 'GET',
    ),
    'getNeighborhoods' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/neighborhoods/',
        'method' => 'GET',
    ),
    'getSingleEvent' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'eventId' => 'eventId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/events/{{eventId}}/',
        'method' => 'GET',
    ),
    'getEvents' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/events/',
        'method' => 'GET',
    ),
    'createGPSLog' => array(
        'dictionary' => array(
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
    'createBulkGPSLogs' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'gpsLogObjectsList' => 'gpsLogObjectsList',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/gps/bulk/',
        'method' => 'POST',
        'custom' => true,
    ),
    'getSingleGPSLog' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'gpsLogObjectId' => 'gpsLogObjectId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/gps/{{gpsLogObjectId}}/',
        'method' => 'GET',
    ),
    'getFilteredGPSLogs' => array(
        'dictionary' => array(
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
    'deleteGPSLog' => array(
        'dictionary' => array(
            'apiKey' => 'apiKey',
            'gpsLogObjectId' => 'gpsLogObjectId',
        ),
        'vendorUrl' => 'https://app.hypertrack.io/api/v1/gps/{{gpsLogObjectId}}/',
        'method' => 'DELETE',
    ),
);