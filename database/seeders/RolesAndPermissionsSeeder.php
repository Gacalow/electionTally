<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // System Management
            'manage-system-settings',
            'manage-elections',
            'manage-candidates',
            'manage-political-parties',
            'manage-positions',
            
            // User Management
            'create-users',
            'edit-users', 
            'delete-users',
            'view-all-users',
            'manage-aspirants',
            'manage-agents',
            
            // Results Management
            'submit-results',
            'verify-results',
            'reject-results',
            'edit-submissions',
            'delete-submissions',
            
            // Data Access
            'view-own-results',
            'view-all-results',
            'view-own-constituency-results',
            'view-own-polling-station-results',
            'view-competitor-aggregate-data',
            
            // File Management
            'upload-verification-files',
            'view-verification-files',
            'delete-verification-files',
            
            // Agent Management
            'create-own-agents',
            'edit-own-agents',
            'delete-own-agents',
            'assign-agents-to-stations',
            'reset-agent-credentials',
            'view-agent-activities',
            
            // Dashboard & Analytics
            'access-aspirant-dashboard',
            'access-admin-dashboard',
            'access-agent-portal',
            'view-real-time-analytics',
            'view-performance-metrics',
            
            // Export & Reporting
            'export-own-data',
            'export-all-data',
            'generate-reports',
            'download-verification-files',
            
            // Security & Audit
            'view-system-logs',
            'view-submission-hashes',
            'view-agent-sessions',
            'access-security-reports',
            'view-integrity-reports',
            
            // Subscription Management
            'manage-subscriptions',
            'view-payment-status',
            'extend-aspirant-access',
            'suspend-aspirant-access',
            
            // Geographic Access
            'access-all-counties',
            'access-assigned-constituency',
            'access-assigned-ward',
            'access-assigned-polling-station',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign permissions
        $this->createSuperAdminRole();
        $this->createAspirantRole();
        $this->createAgentRole();
        $this->createAuditorRole();
    }

    private function createSuperAdminRole()
    {
        $role = Role::create(['name' => 'super-admin']);
        
        // Super Admin gets ALL permissions
        $role->givePermissionTo(Permission::all());
    }

    private function createAspirantRole()
    {
        $role = Role::create(['name' => 'aspirant']);
        
        $aspirantPermissions = [
            // Dashboard Access
            'access-aspirant-dashboard',
            'view-real-time-analytics',
            'view-performance-metrics',
            
            // Results Access (Own constituency/ward only)
            'view-own-results',
            'view-own-constituency-results',
            'view-competitor-aggregate-data',
            'access-assigned-constituency',
            'access-assigned-ward',
            
            // Agent Management
            'create-own-agents',
            'edit-own-agents',
            'delete-own-agents',
            'assign-agents-to-stations',
            'reset-agent-credentials',
            'view-agent-activities',
            
            // File Access
            'view-verification-files',
            'download-verification-files',
            
            // Export & Reporting
            'export-own-data',
            'generate-reports',
            
            // Subscription
            'view-payment-status',
        ];
        
        $role->givePermissionTo($aspirantPermissions);
    }

    private function createAgentRole()
    {
        $role = Role::create(['name' => 'agent']);
        
        $agentPermissions = [
            // Results Submission
            'submit-results',
            'edit-submissions', // Only their own, with time limits
            
            // File Management
            'upload-verification-files',
            'view-verification-files', // Only their own
            
            // Data Access (Very Limited)
            'view-own-polling-station-results',
            'access-assigned-polling-station',
            'access-agent-portal',
            
            // Basic Profile
            'view-own-results', // Only their submissions
        ];
        
        $role->givePermissionTo($agentPermissions);
    }

    private function createAuditorRole()
    {
        $role = Role::create(['name' => 'auditor']);
        
        $auditorPermissions = [
            // Read-Only Access
            'view-all-results',
            'view-all-users',
            'access-all-counties',
            
            // Security & Integrity
            'view-system-logs',
            'view-submission-hashes',
            'view-agent-sessions',
            'access-security-reports',
            'view-integrity-reports',
            
            // Files (Read-Only)
            'view-verification-files',
            'download-verification-files',
            
            // Analytics & Reporting
            'view-real-time-analytics',
            'generate-reports',
            'export-all-data',
            
            // Agent Monitoring
            'view-agent-activities',
        ];
        
        $role->givePermissionTo($auditorPermissions);
    }
}