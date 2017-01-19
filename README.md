# HyperTrack Package
HyperTrack lets you build location features, without worrying about infrastructure.
* Domain: hypertrack.io
* Credentials: APIkey

## How to get credentials: 
0. Sign-up on [HyperTrack.io](https://dashboard.hypertrack.io/signup/) 
1. After registration, in dashboard, go to page [settings/accounts](https://dashboard.hypertrack.io/settings/accounts)
2. Use "Secret Key" as "apiKey" credentials

## HyperTrack.createDriver
Create and return a Driver object.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| API key.
| vehicleType    | String     | The default vehicle type of the driver. Must be one of 'walking, bicycle, motorcycle, car, 3-wheeler, van, flight, train, ship'.
| name           | String     | Name of the driver.
| phone          | String     | E164 formatted phone number of the driver.
| photo          | File       | A photo file of the driver.
| lookupId       | String     | A unique id that you can add to the driver to search.
| fleetId        | String     | The identifier of the fleet to which the driver belongs.

## HyperTrack.getSingleDriver
Retrieves a driver object with the id.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| driverId  | String     | Valid driver identifier.

## HyperTrack.updateDriver
Edit an existing driver object.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| API key.
| driverId   | String     | Valid driver identifier.
| vehicleType| String     | The default vehicle type of the driver. Must be one of 'walking, bicycle, motorcycle, car, 3-wheeler, van, flight, train, ship'.
| name       | String     | Name of the driver.
| phone      | String     | E164 formatted phone number of the driver.
| photo      | File       | A photo file of the driver.
| lookupId   | String     | A unique id that you can add to the driver to search.
| fleetId    | String     | The identifier of the fleet to which the driver belongs.

## HyperTrack.deleteDriver
Delete an existing driver object.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| driverId  | String     | Valid driver identifier.

## HyperTrack.getDrivers
List all driver objects. The list can be filtered using the following parameters.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| pageSize  | Number     | Maximum number of objects to return, default is 50.
| name      | String     | Filter drivers with names that contain this string.
| id        | String     | Filter drivers with a comma separated list of ids.
| fleetId   | String     | Filter driver objects by fleet.
| bbox      | String     | Filter driver objects by bounding box, specified as max_lng, max_lat, min_lng, min_lat.
| minDate   | String     | Filter objects by minimum created at date.
| maxDate   | String     | Filter objects by maximum created at date.

## HyperTrack.getDriverOverview
Retrieves the overview of an existing driver's performance. Supply the unique identifier that was returned on driver creation.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| driverId  | String     | Valid driver identifier.
| minDate   | String     | Minimum date as ISO datetime string to get statistics for a driver.
| maxDate   | String     | Maximum date as ISO datetime string to get statistics for a driver.

## HyperTrack.getDriversLocations
Returns a minimal list of your drivers with location to display on a map.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| fleetId   | String     | Filter only drivers of a particular fleet.
| pageSize  | Number     | The number of entries to return in a page (maximum of 200).
| minDate   | String     | Minimum created date as ISO datetime string to filter drivers.
| maxDate   | String     | Maximum created date as ISO datetime string to filter drivers.

## HyperTrack.assignTaskToDriver
This API will assign a Task to a Driver. We recommend using this after you have created tasks and want to start tracking them. If driver is on a Trip when the call is made, we add these task to the currently running Trip, else we create a new Trip and start tracking it for you. When all tasks are marked completed, we end the Trip and stop tracking.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| driverId  | String     | Valid driver identifier
| taskId    | String     | Task id to be assigned to the driver.

## HyperTrack.endTripForDriver
This API will end the live trip for a Driver.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| driverId  | String     | Valid driver identifier.

## HyperTrack.endShiftForDriver
This API will end the live shift for a Driver.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| driverId  | String     | Valid driver identifier.

## HyperTrack.createTrip
Creates a new trip object. By default, it also starts the trip.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| API key.
| driverId       | String     | The id of the driver who will be on trip. If not specified, a new driver will be created for the purpose of the trip.
| startLocation  | String     | The start location of the trip.
| tasks          | Array      | The array of task ids to be performed on the trip.
| vehicleType    | String     | The vehicle type to be used in the trip. If not specified, this defaults to vehicle type of driver. Possible types are walking, bicycle, motorcycle, car, 3-wheeler, van.
| hasOrderedTasks| Boolean    | Set true to indicate the tasks have a pre-defined sequence as specified in tasks. Default is false.
| isAutoEnded    | Boolean    | Set false if the trip should not end after the last task is completed. Default is true, and the trip ends after the last task is completed.

#### tasks format
```json

["b2249ba8-e88c-455e-b02f-672677828ddc", "b2249ba8-e88c-455e-b02f-672677828ddd"]

```

## HyperTrack.endTrip
Ends a live trip by trip id.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| API key.
| tripId     | String     | Valid trip identifier.
| endLocation| String     | Location where the trip ends.
| endTime    | String     | Time at which the trip ends, defaults to current time.

## HyperTrack.getSingleTrip
Retrieves a trip object with the id.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| tripId    | String     | Valid trip identifier.

## HyperTrack.deleteTrip
Delete an existing trip object.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| tripId    | String     | Valid trip identifier.

## HyperTrack.getTrips
List all trip objects. The list can be filtered using the following parameters.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| pageSize  | Number     | Maximum number of objects to return, default is 50.
| driverId  | String     | Filter trips for a particular driver id.
| id        | String     | Filter trips with a comma separated list of ids.
| status    | String     | Filter trips for a particular status, can be one of live, ended, suspended.
| minDate   | String     | Filter objects by minimum created at date.
| maxDate   | String     | Filter objects by maximum created at date.

## HyperTrack.addTaskToTrip
This API lets you add Tasks to a live Trip. Only tasks that have not been completed can be added to a Trip.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| tripId    | String     | Valid trip identifier.
| taskId    | String     | The id of the task to be added.

## HyperTrack.removeTaskFromTrip
This API lets you remove Tasks to a live Trip. Only tasks that are on the Trip and have not been completed can be removed.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| tripId    | String     | Valid trip identifier.
| taskId    | String     | The id of the task to be removed.

## HyperTrack.changeTripTasksSequence
This API lets you reorder Tasks of a live Trip. This can only be done for Trips that have has_ordered_tasks as true.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| tripId    | String     | Valid trip identifier.
| taskOrder | Array      | Array of task ids in the new sequence. Must have all ids of tasks on the trip.

#### taskOrder format
```json

["b2249ba8-e88c-455e-b02f-672677828ddc", "b2249ba8-e88c-455e-b02f-672677828ddd"]

```

## HyperTrack.createTask
Creates a new task object.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| API key.
| destinationId| String     | The id of the destination where the task will be performed.
| action       | String     | The action of the task, possible values are pickup, delivery, visit or task. Defaults to task.
| orderId      | String     | An id that you can specify based on your internal ids.
| committedEta | String     | The eta commitment made to the customer to measure on-time performance.

## HyperTrack.createTaskWithNewDestination
Creates a new task object with creating new destination.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| API key.
| customerId       | String     | The id of the customer to which this destination belongs.
| address          | String     | Street address of the destination.
| landmark         | String     | Landmark near destination.
| zipCode          | String     | Zip or postal code of the destination.
| city             | String     | City of the destination.
| state            | String     | State of the destination.
| country          | String     | Country of the destination.
| locationLatitude | String     | Location latitude of the destination.
| locationLongitude| String     | Location longitude of the destination.
| action           | String     | The action of the task, possible values are pickup, delivery, visit or task. Defaults to task.
| orderId          | String     | An id that you can specify based on your internal ids.
| committedEta     | String     | The eta commitment made to the customer to measure on-time performance.

## HyperTrack.completeTask
Completes a Task.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| API key.
| taskId            | String     | Valid task identifier.
| completionTime    | String     | Timestamp when task is completed, default to current time.
| completionLocation| String     | Location at which task is completed.

## HyperTrack.cancelTask
Cancels a Task. Canceled tasks cannot be restarted, removed or completed.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| API key.
| taskId         | String     | Valid task identifier.
| cancelationTime| String     | Timestamp when task is canceled, default to current time.

## HyperTrack.getSingleTask
Retrieves a task object with the id.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| taskId    | String     | Valid task identifier.

## HyperTrack.updateDestinationLocation
Updates the location of the destination of the task.

| Field               | Type       | Description
|---------------------|------------|----------
| apiKey              | credentials| API key.
| taskId              | String     | Valid task identifier.
| locationLatitude    | String     | Location latitude of the new destination.
| locationLongitude   | String     | Location longitude of the new destination.

## HyperTrack.getTasks
List all tasks objects. The list can be filtered using the following parameters.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| pageSize  | Number     | Maximum number of objects to return, default is 50.
| driverId  | String     | Filter tasks that are assigned to a driver.
| orderId   | String     | Filter tasks by order id.
| minDate   | String     | Filter objects by minimum created at date.
| maxDate   | String     | Filter objects by maximum created at date.

## HyperTrack.deleteTask
Delete an existing task object.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| taskId    | String     | Valid task identifier.

## HyperTrack.createShift
Creates a new shift object.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| API key.
| driverId     | String     | The id of the driver on shift.
| startLocation| String     | Start location of the shift.
| startedAt    | String     | Start time of the shift, default is current time.

## HyperTrack.getSingleShift
Retrieves a shift object with the id.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| shiftId   | String     | Valid shift identifier.

## HyperTrack.endShift
Ends a shift object with the id.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| shiftId   | String     | Valid shift identifier

## HyperTrack.deleteShift
Delete an existing shift object.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| shiftId   | String     | Valid shift identifier

## HyperTrack.getShifts
List all shift objects. The list can be filtered using the following parameters.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| pageSize  | Number     | Maximum number of objects to return, default is 50.
| id        | String     | Filter shifts with a comma separated list of ids.
| driverId  | String     | Filter shift objects for a particular driver.
| isActive  | Boolean    | Filter only active or inactive shifts.
| minDate   | String     | Filter objects by minimum created at date.
| maxDate   | String     | Filter objects by maximum created at date.

## HyperTrack.createDestination
Creates a new destination object.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| API key.
| customerId       | String     | The id of the customer to which this destination belongs.
| address          | String     | Street address of the destination.
| landmark         | String     | Landmark near destination.
| zipCode          | String     | Zip or postal code of the destination.
| city             | String     | City of the destination.
| state            | String     | State of the destination.
| country          | String     | Country of the destination.
| locationLatitude | String     | Location latitude of the destination.
| locationLongitude| String     | Location longitude of the destination.

## HyperTrack.getSingleDestination
Retrieves the details of an existing destination.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| API key.
| destinationId    | String     | Valid destination identifier.

## HyperTrack.updateDestination
Edit an existing destination object.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| API key.
| destinationId    | String     | Valid destination identifier.
| customerId       | String     | The id of the customer to which this destination belongs.
| address          | String     | Street address of the destination.
| landmark         | String     | Landmark near destination.
| zipCode          | String     | Zip or postal code of the destination.
| city             | String     | City of the destination.
| state            | String     | State of the destination.
| country          | String     | Country of the destination.
| locationLatitude | String     | Location latitude of the destination.
| locationLongitude| String     | Location longitude of the destination.

## HyperTrack.deleteDestination
Delete an existing destination object.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| API key.
| destinationId    | String     | Valid destination identifier.

## HyperTrack.getDestinations
Returns a list of your destinations. The destinations are returned sorted by updated date, with the most recently updated destinations appearing first.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| pageSize  | Number     | Maximum number of objects to return, default is 50.
| customerId| String     | Filter destination objects by customer.
| minDate   | String     | Filter objects by minimum created at date.
| maxDate   | String     | Filter objects by maximum created at date.

## HyperTrack.createCustomer
Creates a new customer object.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| name      | String     | Name of the customer.
| phone     | String     | E164 formatted phone number of customer.
| email     | String     | Email of the customer.

## HyperTrack.getSingleCustomer
Retrieves a customer object with the id.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| customerId| String     | Valid customer identifier.

## HyperTrack.updateCustomer
Edit an existing customer object.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| customerId| String     | Valid customer identifier.
| name      | String     | Name of the customer.
| phone     | String     | E164 formatted phone number of customer.
| email     | String     | Email of the customer.

## HyperTrack.deleteCustomer
Delete an existing customer object.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| customerId| String     | Valid customer identifier.

## HyperTrack.getCustomers
List all customer objects. The list can be filtered using the following parameters.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| API key.
| pageSize      | Number     | Maximum number of objects to return, default is 50.
| name          | String     | Filter customers with names that contain this string.
| id            | String     | Filter customers with a comma separated list of ids.
| neighborhoodId| String     | Filter customer objects by neighborhood.
| minDate       | String     | Filter objects by minimum created at date.
| maxDate       | String     | Filter objects by maximum created at date.

## HyperTrack.createFleet
Creates a new fleet object.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| name      | String     | Name of the fleet.

## HyperTrack.getSingleFleet
Retrieves a fleet object with the id.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| fleetId   | String     | Valid fleet identifier.

## HyperTrack.updateFleet
Edit an existing fleet object.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| fleetId   | String     | Valid fleet identifier.
| name      | String     | Name of the fleet.

## HyperTrack.deleteFleet
Delete an existing fleet object.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| fleetId   | String     | Valid fleet identifier.

## HyperTrack.getFleets
List all fleet objects. The list can be filtered using the following parameters.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| pageSize  | Number     | Maximum number of objects to return, default is 50.
| name      | String     | Filter fleets with names that contain this string.
| minDate   | String     | Filter objects by minimum created at date.
| maxDate   | String     | Filter objects by maximum created at date.

## HyperTrack.getSingleNeighborhood
Retrieves a neighborhood object with the id.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| API key.
| neighborhoodId    | String     | Valid neighborhood identifier.

## HyperTrack.getNeighborhoods
List all neighborhood objects.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.

## HyperTrack.getSingleEvent
This API retrieves the details of an event. Supply the unique identifier of the event, which you might have received in a webhook. All events share a common structure, detailed below. The only property that will differ is the data property. In each case, the data dictionary will have an attribute called object and its value will be the same as retrieving the same object directly from the API. For example, a order.created event will have the same information as retrieving the relevant order would.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| eventId   | String     | Valid event identifier.

## HyperTrack.getEvents
Retrieve list of all events.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.

## HyperTrack.createGPSLog
Creates a new gpslog object.

| Field               | Type       | Description
|---------------------|------------|----------
| apiKey              | credentials| API key.
| driverId            | String     | The driver id to which this location belongs.
| locationLatitude    | String     | The location recorded latitude.
| locationLongitude   | String     | The location recorded longitude.
| recordedAt          | String     | The timestamp at which the location was recorded.
| locationAccuracy    | String     | The location accuracy of the location in meters.
| speed               | String     | The speed in meters/speed.
| bearing             | String     | The bearing in degrees from the N-S axis.
| altitude            | String     | The altitude above sea level in meters.
| activities          | String     | List of activities recorded with the location. Possible activities are stationary, walking, running, automotive, cycling or unknown.
| activityConfidence  | Number     | Confidence level of the recorded activities, between 0 to 100.

## HyperTrack.createBulkGPSLogs
Create multiple GPS logs, by sending a list of GPS Log objects.

| Field                | Type       | Description
|----------------------|------------|----------
| apiKey               | credentials| API key.
| gpsLogObjectsList    | Array      | Array of JSON objects, list of GPS Log objects.

#### gpsLogObjectsList format
```json

[
    {
        "driver_id": "41caa9f2-ad63-4a8b-98ed-1414c372e1ce",
        "phone": "+16502469293",
        "recorded_at": "2016-03-09T07:13:05.026316Z",
        "location": {
            "type": "Point",
            "coordinates": [
                77.20267225995399,
                28.55390609244681
            ]
        }
    },
    {
        "driver_id": "41caa9f2-ad63-4a8b-98ed-1414c372e1cc",
        "phone": "+16502469294",
        "recorded_at": "2016-03-09T07:13:05.036316Z",
        "location": {
            "type": "Point",
            "coordinates": [
                77.20267225995399,
                28.55390609244681
            ]
        }
    }
]

```

## HyperTrack.getSingleGPSLog
Retrieves a GPS Log object with the id.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| API key.
| gpsLogObjectId    | String     | Valid GPS log object identifier.

## HyperTrack.getFilteredGPSLogs
GPS Log data from the device is filtered to remove noise and improve accuracy. This filtered list can be retrieve with this API. You can also specify parameters to query GPS Log objects of a particular driver or time period.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| API key.
| pageSize     | Number     | Maximum number of objects to return, default is 50.
| driverId     | String     | Filter GPS Log objects by driver.
| minRecordedAt| String     | Filter objects by minimum device timestamp.
| maxRecordedAt| String     | Filter objects by maximum device timestamp.
| minDate      | String     | Filter objects by minimum created at date.
| maxDate      | String     | Filter objects by maximum created at date.

## HyperTrack.deleteGPSLog
Delete an existing GPS Log object.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| API key.
| gpsLogObjectId    | String     | Valid GPS Log object identifier.
