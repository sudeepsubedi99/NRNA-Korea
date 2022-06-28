<?php

namespace Botble\Project\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Project\Http\Requests\ProjectRequest;
use Botble\Project\Repositories\Interfaces\ProjectInterface;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Botble\Project\Tables\ProjectTable;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Project\Forms\ProjectForm;
use Botble\Base\Forms\FormBuilder;

class ProjectController extends BaseController
{
    /**
     * @var ProjectInterface
     */
    protected $projectRepository;

    /**
     * @param ProjectInterface $projectRepository
     */
    public function __construct(ProjectInterface $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * @param ProjectTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ProjectTable $table)
    {
        page_title()->setTitle(trans('plugins/project::project.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/project::project.create'));

        return $formBuilder->create(ProjectForm::class)->renderForm();
    }

    /**
     * @param ProjectRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(ProjectRequest $request, BaseHttpResponse $response)
    {
        $project = $this->projectRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(PROJECT_MODULE_SCREEN_NAME, $request, $project));

        return $response
            ->setPreviousUrl(route('project.index'))
            ->setNextUrl(route('project.edit', $project->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function edit($id, FormBuilder $formBuilder, Request $request)
    {
        $project = $this->projectRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $project));

        page_title()->setTitle(trans('plugins/project::project.edit') . ' "' . $project->name . '"');

        return $formBuilder->create(ProjectForm::class, ['model' => $project])->renderForm();
    }

    /**
     * @param int $id
     * @param ProjectRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, ProjectRequest $request, BaseHttpResponse $response)
    {
        $project = $this->projectRepository->findOrFail($id);

        $project->fill($request->input());

        $project = $this->projectRepository->createOrUpdate($project);

        event(new UpdatedContentEvent(PROJECT_MODULE_SCREEN_NAME, $request, $project));

        return $response
            ->setPreviousUrl(route('project.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function destroy(Request $request, $id, BaseHttpResponse $response)
    {
        try {
            $project = $this->projectRepository->findOrFail($id);

            $this->projectRepository->delete($project);

            event(new DeletedContentEvent(PROJECT_MODULE_SCREEN_NAME, $request, $project));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws Exception
     */
    public function deletes(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $project = $this->projectRepository->findOrFail($id);
            $this->projectRepository->delete($project);
            event(new DeletedContentEvent(PROJECT_MODULE_SCREEN_NAME, $request, $project));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
