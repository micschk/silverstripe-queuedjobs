<?php

namespace SilverStripe\QueuedJobs\Services;

use SilverStripe\QueuedJobs\DataObjects\QueuedJobDescriptor;

/**
 * execute jobs immediately in the current request context
 *
 * @author marcus@silverstripe.com.au
 * @license BSD License http://silverstripe.org/bsd-license/
 */
class ImmediateQueueHandler
{
    /**
     * @var array
     */
    private static $dependencies = array(
        'queuedJobService' => '%$SilverStripe\\QueuedJobs\\Services\\QueuedJobService',
    );

    /**
     * @var QueuedJobService
     */
    public $queuedJobService;

    /**
     * @param QueuedJobDescriptor $job
     */
    public function startJobOnQueue(QueuedJobDescriptor $job)
    {
        $this->queuedJobService->runJob($job->ID);
    }
}
