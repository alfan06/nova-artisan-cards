import MigrateFreshCard from "./components/MigrateFresh/MigrateFreshCard.vue";
import MaintenanceModeCard from "./components/MaintenanceMode/MaintenanceModeCard.vue";
import MaintenanceModeWarningCard from "./components/MaintenanceMode/MaintenanceModeWarningCard.vue";
import DatabaseBackupCard from "./components/DatabaseBackup/DatabaseBackupCard.vue";

Nova.booting((app, store) => {
  app.component('nova-artisan-migrate-fresh-card', MigrateFreshCard)
  app.component('nova-artisan-maintenance-mode-card', MaintenanceModeCard)
  app.component('nova-artisan-maintenance-mode-warning-card', MaintenanceModeWarningCard)
  app.component('nova-artisan-database-backup-card', DatabaseBackupCard)
})
