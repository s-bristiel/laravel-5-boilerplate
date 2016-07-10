<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Access\Permission{
/**
 * Class Permission
 *
 * @package App\Models\Access\Permission
 * @property integer $id
 * @property string $name
 * @property string $display_name
 * @property integer $sort
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\Role\Role[] $roles
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereSort($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models\Access\Role{
/**
 * Class Role
 *
 * @package App\Models\Access\Role
 * @property integer $id
 * @property string $name
 * @property boolean $all
 * @property integer $sort
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $edit_button
 * @property-read mixed $delete_button
 * @property-read mixed $action_buttons
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\User\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\Permission\Permission[] $permissions
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Role\Role whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Role\Role whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Role\Role whereAll($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Role\Role whereSort($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Role\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Role\Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models\Access\User{
/**
 * Class SocialLogin
 *
 * @package App\Models\Access\User
 * @property integer $id
 * @property integer $user_id
 * @property string $provider
 * @property string $provider_id
 * @property string $token
 * @property string $avatar
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\SocialLogin whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\SocialLogin whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\SocialLogin whereProvider($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\SocialLogin whereProviderId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\SocialLogin whereToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\SocialLogin whereAvatar($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\SocialLogin whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\SocialLogin whereUpdatedAt($value)
 */
	class SocialLogin extends \Eloquent {}
}

namespace App\Models\Access\User{
/**
 * Class User
 *
 * @package App\Models\Access\User
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property boolean $status
 * @property string $confirmation_code
 * @property boolean $confirmed
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read mixed $confirmed_label
 * @property-read mixed $picture
 * @property-read mixed $edit_button
 * @property-read mixed $change_password_button
 * @property-read mixed $status_button
 * @property-read mixed $confirmed_button
 * @property-read mixed $delete_button
 * @property-read mixed $restore_button
 * @property-read mixed $delete_permanently_button
 * @property-read mixed $login_as_button
 * @property-read mixed $action_buttons
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\Role\Role[] $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\User\SocialLogin[] $providers
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereConfirmationCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereConfirmed($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereDeletedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models\History{
/**
 * Class History
 * package App
 *
 * @property integer $id
 * @property integer $type_id
 * @property integer $user_id
 * @property integer $entity_id
 * @property string $icon
 * @property string $class
 * @property string $text
 * @property string $assets
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Access\User\User $user
 * @property-read \App\Models\History\HistoryType $type
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\History whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\History whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\History whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\History whereEntityId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\History whereIcon($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\History whereClass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\History whereText($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\History whereAssets($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\History whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\History whereUpdatedAt($value)
 */
	class History extends \Eloquent {}
}

namespace App\Models\History{
/**
 * Class HistoryType
 * package App
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\HistoryType whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\HistoryType whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\HistoryType whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\History\HistoryType whereUpdatedAt($value)
 */
	class HistoryType extends \Eloquent {}
}

