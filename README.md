[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/HyperTrack/functions?utm_source=RapidAPIGitHub_HyperTrackFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)
# HyperTrack Package
HyperTrack lets you build location features, without worrying about infrastructure. Add location tracking for logistics and courier services.
* Domain: hypertrack.com
* Credentials: accessToken, traking, HyperTrack

## How to get credentials: 
0. Sign-up on [HyperTrack.io](https://dashboard.hypertrack.com/signup/)
1. After registration, in dashboard, go to page [settings/accounts](https://dashboard.hypertrack.com/settings/accounts)
2. Use "Secret Key" as "apiKey" credentials

## Custom datatypes:
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]```
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
## HyperTrack.createUser
This API will create and return a User object.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| name       | String     | Name of the user.
| phone      | String     | E164 formatted phone number of the user.
| photo      | File       | A photo file of the user. (link)
| lookupId   | String     | A unique id that you can add to the user to search.
| groupId    | String     | The identifier of the group to which the user belongs.

## HyperTrack.assignActionsToUser
This API will assign a list of Action objects to a User.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| userId     | String     | User ID.
| actionIds  | List       | List of action ids to be assigned to the user.

## HyperTrack.getUser
Retrieves a user object with the id.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| userId     | String     | User id.

## HyperTrack.updateUser
Retrieves a user object with the id.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| userId     | String     | User id.
| name       | String     | Name of the user.
| phone      | String     | E164 formatted phone number of the user.
| photo      | File       | A photo file of the user. (link)
| lookupId   | String     | A unique id that you can add to the user to search.
| groupId    | String     | The identifier of the group to which the user belongs.

## HyperTrack.deleteUser
Delete an existing user object.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| userId     | String     | User id.

## HyperTrack.usersList
List all user objects. The list can be filtered using the following parameters.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| pageSize   | Number     | Maximum number of objects to return, default is 50.
| name       | String     | Filter users with names that contain this string.
| id         | String     | Filter users with a comma separated list of ids.
| groupId    | String     | Filter user objects by group.
| lookupId   | String     | Filter user objects by lookup id.

## HyperTrack.createAction
Creates a new action object.

| Field          | Type       | Description
|----------------|------------|----------
| accessToken    | credentials| Access token received from Hypertrack.
| expectedPlaceId| String     | The id of the Place where the action will be performed.
| expectedPlace  | String     | The Place object where the action will be performed. Only one of expected_place or expected_place_id must be specified.
| type           | Select     | The type of the action, possible values are pickup, delivery, dropoff, visit, stopover or task. Defaults to task.
| scheduledAt    | DatePicker | The scheduled time by when the action should be completed.
| lookupId       | String     | Filter user objects by lookup id.

## HyperTrack.completeAction
Completes an Action.

| Field             | Type       | Description
|-------------------|------------|----------
| accessToken       | credentials| Access token received from Hypertrack.
| actionId          | String     | Action id.
| completedAt       | DatePicker | Timestamp when action is completed, default to current time
| completionLocation| String     | Location at which action is completed.

## HyperTrack.cancelAction
Cancels an Action. Canceled actions cannot be reassigned, removed or completed.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| actionId   | String     | Action id.

## HyperTrack.getSingleAction
Retrieves an action object with the id.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| actionId   | String     | Action id.

## HyperTrack.getActionMeter
Returns distance and duration traveled for the action. By default, this is from when the previous was completed or when the user went online.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| actionId   | String     | Action id.

## HyperTrack.getActionsList
List all actions objects. The list can be filtered using the following parameters.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| pageSize   | Number     | Maximum number of objects to return, default is 50.
| userId     | String     | Filter actions that are assigned to a user.
| lookupId   | String     | Filter actions by lookup id.

## HyperTrack.deleteAction
Delete an existing action object.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| actionId   | String     | Action id.

## HyperTrack.getGroupsList
List all group objects. The list can be filtered using the following parameters.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| pageSize   | String     | Maximum number of objects to return, default is 50.
| name       | String     | Filter groups with names that contain this string.
| minDate    | DatePicker | Filter objects by minimum created at date.
| maxDate    | DatePicker | Filter objects by maximum created at date.

## HyperTrack.createGroup
Creates a new group object.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| name       | String     | Name of the group.

## HyperTrack.getSingleGroup
Retrieves a group object with the id.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| groupId    | String     | Group ID.

## HyperTrack.updateGroup
Edit an existing group object.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| groupId    | String     | Group ID.
| name       | String     | Name of the group.

## HyperTrack.deleteGroup
Delete an existing group object.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access token received from Hypertrack.
| groupId    | String     | Group ID.

