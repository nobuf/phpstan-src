<?php declare(strict_types = 1);

namespace PHPStan\Reflection;

class MethodPrototypeReflection implements ClassMemberReflection
{

	private \PHPStan\Reflection\ClassReflection $declaringClass;

	private bool $isStatic;

	private bool $isPrivate;

	private bool $isPublic;

	private bool $isAbstract;

	public function __construct(
		ClassReflection $declaringClass,
		bool $isStatic,
		bool $isPrivate,
		bool $isPublic,
		bool $isAbstract
	)
	{
		$this->declaringClass = $declaringClass;
		$this->isStatic = $isStatic;
		$this->isPrivate = $isPrivate;
		$this->isPublic = $isPublic;
		$this->isAbstract = $isAbstract;
	}

	public function getDeclaringClass(): ClassReflection
	{
		return $this->declaringClass;
	}

	public function isStatic(): bool
	{
		return $this->isStatic;
	}

	public function isPrivate(): bool
	{
		return $this->isPrivate;
	}

	public function isPublic(): bool
	{
		return $this->isPublic;
	}

	public function isAbstract(): bool
	{
		return $this->isAbstract;
	}

	public function getDocComment(): ?string
	{
		return null;
	}

}
